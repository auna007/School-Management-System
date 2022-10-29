<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\User\Entities\ClassManager;

class ClassManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $classes = ClassManager::orderBy('class_title', 'ASC')->get();
        return view('user::class_management', compact('classes'));
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
            'class_title' => 'required|string|max:225',
            'status'=>'required'
        ]);

        $class = ClassManager::create($request->all());
        if($class){
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
        return view('user::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $class = ClassManager::find($id);
        $classes = ClassManager::all();
        return view('user::class_management', compact('classes', 'class'));
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
            'class_title' => 'required|string|max:225',
            'status'=>'required|numeric',
        ]);
        $class = ClassManager::find($id)->update($request->all());
        return redirect()->route('view.class_manager')->with('success_update', 'Updated Successfully!');
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
