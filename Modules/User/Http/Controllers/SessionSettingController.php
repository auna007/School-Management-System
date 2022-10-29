<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\User\Entities\SessionSetting;
use Illuminate\Support\Facades\File;
use Spatie\Activitylog\Mdels\Activity;
use Session;

class SessionSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $sessions = SessionSetting::orderBy('id', 'desc')->get();
        return view('user::session_management', compact('sessions'));
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
            'session' => 'required|string|max:225',
            'status'=>'required'
        ]);

         $sessionCheck = SessionSetting::where('session', $request->session)->first();
         $sessionCheckStatus = SessionSetting::where('status', 1)->first();


         if($sessionCheckStatus && $request->status == 1){
            return back()->with('success', 'Active Session exist!');
         }
         elseif($sessionCheck){
            return back()->with('success', 'Session already exist!');
         }
         else{

         $session = SessionSetting::create($request->all());
         return back()->with('success', 'Created Successfully');
        }

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('user::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function updateStatus(Request $request)
    {

         $sessionCheckStatus = SessionSetting::where('status', 1)->first();
         if($sessionCheckStatus && $request->status == 1){
            $sessions = SessionSetting::orderBy('id', 'desc')->get();
            Session::flash('success_update','Active Session exist!');
            return view('user::session_management', compact('sessions'));
         }
        elseif($request->status == 1){
            $session = SessionSetting::find($request->status_id);
            $session->status = $request->status;
            $session->save();
            Session::flash('success_update','Activated Successfully!');
            return back()->with('success_update','Activated Successfully!');
        }
        else{
            $session = SessionSetting::find($request->status_id);
            $session->status = $request->status;
            $session->save();
            Session::flash('success_update','Deactivated Successfully!');
            return back()->with('success_update','Deactivated Successfully!');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $session = SessionSetting::destroy($id);
        return back()->with('success_delete', 'Deleted Successfully!');
    }
}
