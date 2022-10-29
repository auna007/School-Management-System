<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\User\Entities\PaymentSetting;

class PaymentSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $paymenttypes = PaymentSetting::all();
        return view('user::payment_settings', compact('paymenttypes'));
    }

   
    public function updateStatus(Request $request)
    {
        $paymenttype = PaymentSetting::find($request->status_id);
        $paymenttype->status = $request->status;
        $paymenttype->save();
        return back()->with('success_update','Updated Successfully!');
    }

    /**
     * Store a newly created resource in storage. 
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:225',
            'value' => 'required|numeric',
            'status'=>'required|numeric',
        ]);

        $paymenttype = PaymentSetting::create($request->all());
        if ($paymenttype) {
            return back()->with('success', 'Created Successful!');
        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $paymenttype = PaymentSetting::find($id);
        $paymenttypes = PaymentSetting::all();
        return view('user::payment_settings', compact('paymenttype', 'paymenttypes'));
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
            'title' => 'required|string|max:225',
            'value' => 'required|numeric',
            'status'=>'required|numeric',
        ]);
        $paymenttype = PaymentSetting::find($id)->update($request->all());
        return redirect()->route('view.payment_settings_manager')->with('success_update', 'Updated Successfully!');
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
