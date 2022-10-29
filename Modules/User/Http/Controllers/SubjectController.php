<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\User\Entities\Subject;
use Modules\User\Entities\Category;
use Modules\User\Entities\ClassManager;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $subjects = Subject::all();
        $classes = ClassManager::orderBy('class_title', 'ASC')->get();
        return view('user::subject_management', compact('subjects', 'classes'));
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
            'subject_title' => 'required|string|max:225',
            'subject_acronym' => 'required|string|max:225',
            'class_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'status'=>'required'
        ]);

        $subject = Subject::create($request->all());
        if($subject){
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
        $subject = Subject::find($id);
        $subjects = Subject::all();
        $classes = ClassManager::orderBy('class_title', 'ASC')->get();
        return view('user::subject_management', compact('subject', 'subjects', 'classes'));
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
            'subject_title' => 'required|string|max:225',
            'subject_acronym' => 'required|string|max:225',
            'class_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'status'=>'required'
        ]);

        $subject = Subject::find($id)->update($request->all());
        if ($subject) {
            return redirect()->route('subjectmanagement.index')->with('success_update', 'Updated Successfully!');
        } else {
            return redirect()->route('subjectmanagement.index')->with('success_update', 'No Update Submitted!');
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
