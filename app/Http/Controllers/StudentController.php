<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class StudentController extends Controller
{
    /**
     * GET ALL STUDENTS
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get all students

        $data = Student::all();
        $response = [
            "code"=>200,
            "success"=>true,
            "timestamp"=>  Carbon::now(),
            "data"=> $data
        ];

        return $response;

    }

    /**
     * CREATE A STUDENT.
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate data
        $request->validate([
            'name' =>'required',
            'age'=>'required | max:3',
        ]);

        $data = Student::create($request->all());

        $response = [
            "code"=>201,
            "success"=>true,
            "timestamp"=>  Carbon::now(),
            "data"=> $data
        ];

        return $response;
    }

    /**
     * GET -> get one user by id
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //GET -> get one user by id
        $data =  Student::find($id);
        $response = [
            "code"=>200,
            "success"=>true,
            "timestamp"=>  Carbon::now(),
            "data"=> $data
        ];

        return $response;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $student = Student::find($id);
        $student->update($request->all());

        $response = [
            "code"=>200,
            "success"=>true,
            "timestamp"=>  Carbon::now(),
            "data"=> $student
        ];

        return $response;
    }

    /**
     * DELETE User
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Student::destroy($id);
        $response = [
            "code"=>200,
            "success"=>true,
            "timestamp"=>  Carbon::now(),
            "data"=> $data
        ];

        return $response;

    }
}
