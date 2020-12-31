<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::select('st_name','st_mother_phone','st_identity')->get();
//        $students=Student::all();
        return $students;
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create([
            'st_name'=> $request->st_name,
            'st_father_phone'=>$request->st_father_phone,
            'st_mother_phone'=>$request->st_mother_phone,
            'st_identity'=>$request->st_identity,
            'st_date_of_birth'=>$request->st_date_of_birth,
        ]);
        return response([
            'status'=>'success'
        ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return response([
            'status'=>'success',
            'data'=>$student

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {

        $student->st_name=$request->st_name;
        $student->st_father_phone=$request->st_father_phone;
        $student->st_mother_phone=$request->st_mother_phone;
        $student->st_identity=$request->st_identity;
        $student->st_date_of_birth=$request->st_date_of_birth;
        $student->save();


        return response([
            'status'=>'success'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return response([
            'status'=>'student deleted'
                ]

        );
    }
}
