<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=Student::all();
        return view("student.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("student.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'admition_no'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'dob'=>'required',
            'course_id'=>'required',
            'nic'=>'required',
        ]);
        Student::create($request->all());
        return view('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students=Student::find($id);
        return view('student.show', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $students=Student::find($id);
        return view('student.edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'admition_no'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'dob'=>'required',
            'course_id'=>'required',
            'nic'=>'required',
        ]);
        $students=Student::find($id);
        $students->update($request->all());
        return redirect()->route('student.index',compact('students'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::find($id)->delete();
        return redirect()->route('student.index');
    }
}
