<?php

namespace Modules\Applicant\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Applicant\Entities\Applicant;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Support\Facades\Hash;
use Modules\User\Entities\ClassManager;
use Modules\User\Entities\Category;
use Modules\User\Entities\SessionSetting;

class ApplicantController extends Controller
{

    use AuthenticatesUsers;

   
   

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('applicant::index');
    }

    public function pending_app()
    {
        //status = 1 means applicant has successfully applied and also paid for processing fee
        //$applicants = Applicant::where('status', 0)->get();
        //$sessions = SessionSetting::all();
        //return view('applicant::pending_applications', compact('applicants', 'sessions'));
        return view('applicant::pending_applications');
    }

    public function session_applicants(Request $request)
    {
        $searched_session_applicants = Applicant::where('session_id', $request->session_id)->get();
        $sessions = SessionSetting::all();

        return view('applicant::pending_applications', compact('searched_session_applicants', 'sessions'));
        Session::flash('selected_session', $request->session_id);
       //return redirect('/admin/pending-applications')->with(['searched_session_applicants'=>$searched_session_applicants]);
    }

    public function admit_applicant($id)
    {
         $applicants = Applicant::find($id)->update(['status'=>2]);   
        return back()->with('success', 'Applicant has been admitted successfully!');
    }

    public function successful_app()
    {
        $applicants = Applicant::where('status', 1)->get();
        $sessions = SessionSetting::all();
        return view('applicant::successful_applications', compact('applicants', 'sessions'));
    }

    public function search_applicant(Request $request)
    {
        $searched_applicant = Applicant::where('application_no', $request->application_no)->first();
        return back()->with(['searched_applicant'=>$searched_applicant]);
    }


    public function enrolled_app()
    {
        $applicants = Applicant::where('status', 2)->get();
        $sessions = SessionSetting::all();
        return view('applicant::enrolled_applicants', compact('applicants', 'sessions'));
    }


    /**
     * Show the form for creating a new resource.
     * @return Renderable
     * 
     * 
     * 
     */


    public function login(Request $request)
    {
        $request->validate([
        'username' => 'required|email',
        'password'=> 'required'
        ]);

        if (Auth::guard('applicant')->attempt(['email' => $request->username, 'password' =>$request->password]))
        {
            $request->session()->regenerate();
            return redirect()->route('applicant.dashboard');
        }
        return back()->withInput($request->only('email', 'remember'));

    }

    public function create()
    {
        $classes = ClassManager::all();
        $categories = Category::all();
        return view('applicant::create', compact('classes', 'categories'));
    }

    public function logout(Request $request)
    {
        
        if(Auth::guard('applicant')->check()){
        Auth::guard('applicant')->logout();
        //$request->session()->invalidate();
        //$request->session()->regenerateToken();
        return redirect()->route('applicant.login_form');
        //return redirect(\URL::previous());
        }
    }

    public function applicant_details($id)
    {
        $applicant = Applicant::find($id);

        $applicant_class = $applicant->class;
        $applicant_propose_class = ClassManager::where('id', '=', $applicant->propose_class_id)->first(); 
        $applicant_category = $applicant->category; 
        return view('applicant::applicant_details', compact('applicant', 'applicant_class', 'applicant_category', 'applicant_propose_class'));
    }

    public function retrieve_password()
    {
        return view('applicant::reset-password');
    }

     public function signup()
    {
        return view('applicant::signup');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */

    public function store_personal_info(Request $request, $id)
    {
        $applicant = Applicant::find($id)->update($request->all());
        return back()->with('success', 'Personal Information has been Submitted Successfully!');
    }

     public function store_health_info(Request $request, $id)
    {
        $applicant = Applicant::find($id)->update($request->all());
        return back()->with('success', 'Health Information has been Submitted Successfully!');
    }


    public function store_guardian_info(Request $request, $id)
    {
        $applicant = Applicant::find($id)->update($request->all());
        return back()->with('success', 'Guardian Information has been Submitted Successfully!');
    }

     public function store_previous_edu(Request $request, $id)
    {
        $applicant = Applicant::find($id)->update($request->all());
        return back()->with('success', 'Previous Education has been Submitted Successfully!');
    }

    public function store_passport(Request $request, $id)
    {

        $new_image = $request->file('passport');
        $imageName = Auth::user()->application_no.'.'.$new_image->extension();  
        $new_image->move(public_path('applicant_passport'), $imageName);
        $applicant = Applicant::find($id)->Update(['passport'=>$imageName]);
        
        Session::flash('success_passport', 'Uploaded successfully!');
        return back();
        
    }
   


     public function store_signup(Request $request)
    {

    // function Applicant_ID(){
    // $count=Applicant::all()->count();
    //     $acronym = 'App';
    //     $date = date('Y');
       
    //     if (empty($count)) {
    //             $num = 1;
    //         } else {
    //             $num = $count + 1;
    //         }

    //         if ($num > 9999) {
    //             $id = $acronym . '-' . $date . '-' . $num;
    //         }
    //         if ($num <= 9999) {
    //             $id = $acronym . '-' . $date . '-' . $num;
    //         }
    //         if ($num <= 999) {
    //             $id = $acronym . '-' . $date . '-'.'0'. $num;
    //         }
    //         if ($num <= 99) {
    //            $id = $acronym . '-' . $date . '-'.'00'. $num;
    //         }
    //         if ($num <= 9) {
    //             $id = $acronym . '-' . $date . '-'.'000'. $num;
    //         }

    //        return $id;
    //     }

        $data = $request->all();
        $data['application_no'] = Applicant_ID();
        $data['password'] = Hash::make(Applicant_ID());
        $applicant = Applicant::create($data);
        return back()->with('success', 'Account has been Successfully created!');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('applicant::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('applicant::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
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
