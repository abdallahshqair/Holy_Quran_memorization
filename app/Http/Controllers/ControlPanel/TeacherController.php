<?php

namespace App\Http\Controllers\ControlPanel;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers=Teacher::all();
        return view('control panel.teacher.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('control panel.teacher.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'te_name' => 'required|max:50',
            'te_phone'=>'required',
            'te_identity'=>'required',
            'te_date_of_birth'=>'required',


        ]);
        $teacher=new Teacher();
        $teacher->te_name=$request->te_name;
        $teacher->te_phone=$request->te_phone;
        $teacher->te_identity=$request->te_identity;
        $teacher->te_date_of_birth=$request->te_date_of_birth;
        $teacher->save();
        return redirect()->route('teachers.create')->with('success','تم إضافة الطالب بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('control panel.teacher.edit',compact('teacher'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'te_name' => 'required|max:50',
            'te_phone'=>'required',
            'te_identity'=>'required',
            'te_date_of_birth'=>'required',


        ]);
        $teachers=Teacher::all();


        $teacher->te_name=$request->te_name;
        $teacher->te_phone=$request->te_phone;
        $teacher->te_identity=$request->te_identity;
        $teacher->te_date_of_birth=$request->te_date_of_birth;
        $teacher->save();
        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index');
    }
}
