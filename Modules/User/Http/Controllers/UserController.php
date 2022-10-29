<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Session;
use Illuminate\Support\Facades\Hash;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    use AuthenticatesUsers;

    public function index()
    {
        return view('user::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('user::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
     public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:225',
            'email' => 'required|string',
            'password' => 'required|string',
            'status'=>'required|numeric',
            'rank'=> 'required|string'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->status = $request->status;
        $user->rank = $request->rank;     
        $user->save();
        $user->syncRoles($request->get('role'));   
        
        if ($user) {
            return back()->with('success', 'Created Successful!');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */

    public function updateStatus(Request $request)
    {
        $user = User::find($request->status_id);
        $user->status = $request->status;
        $user->save();
        return back()->with('success_update','Updated Successfully!');
    }

    public function show($id)
    {
        return view('user::show');
    }

    public function userManager()
    {
        $roles = Role::all();
        $users = User::all();
        return view('user::user_management', compact('roles', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $user = User::find($id);
        $user['password'] = bcrypt($user['password']);
        $users = User::all();
        $roles = Role::all();
        $status = 'update';
        $userRole = $user->roles->pluck('name')->toArray();
        return view('user::user_management', compact('user', 'users', 'roles', 'status', 'userRole'));
    }

    public function login(Request $request)
    {
        $request->validate([
        'username' => 'required|email',
        'password'=> 'required'
        ]);

        
        if (Auth::guard('admin')->attempt(['email' => $request->username, 'password'=>$request->password]))
        {
            $request->session()->regenerate();
            return redirect()->route('view.user_dashboard');
        }

        
            return back()->with('message', 'Ooops! Invalid username or password');

    }

    public function dashboard()
    {

        return view('user::dashboard');
    }
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:225',
            'email' => 'required|string',
            'status'=>'required|numeric',
            'role'=>'required'
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->rank = $request->rank;
        $user->status = $request->status; 
        $user->syncRoles($request->get('role'));
        $user->save(); 
               
        return redirect()->route('view.user_manager')->with('success_update', 'Updated Successfully!');
    }


    public function logout(Request $request)
    {

        if(Auth::guard('admin')->check()){
        Auth::guard('admin')->logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        return redirect()->route('admin.login_form');

        }
    }


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
