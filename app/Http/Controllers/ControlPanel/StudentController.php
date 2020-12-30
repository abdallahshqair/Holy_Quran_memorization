<?php

namespace App\Http\Controllers\ControlPanel;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $students=Student::all();
        return view('control panel.student.index',compact('students'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('control panel.student.add');

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
            'st_name' => 'required|max:50',
            'st_father_phone'=>'required',
            'st_mother_phone'=>'required',
            'st_identity'=>'required',
            'st_date_of_birth'=>'required',


        ]);

        $student=new Student();
        $student->st_name=$request->st_name;
        $student->st_father_phone=$request->st_father_phone;
        $student->st_mother_phone=$request->st_mother_phone;
        $student->st_identity=$request->st_identity;
        $student->st_date_of_birth=$request->st_date_of_birth;
        $student->save();
        return redirect()->route('students.create')->with('success','تم إضافة الطالب بنجاح');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('control panel.student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $students=Student::all();


        $student->st_name=$request->st_name;
        $student->st_father_phone=$request->st_father_phone;
        $student->st_mother_phone=$request->st_mother_phone;
        $student->st_identity=$request->st_identity;
        $student->st_date_of_birth=$request->st_date_of_birth;
        $student->save();
        return redirect()->route('students.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {

        $student->delete();
        return redirect()->route('students.index');

    }
}
