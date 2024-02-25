<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));
    }

    
    public function create()
    {
        return view('student.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'admission_no' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'dob' => 'required|date',
            'course_id' => 'required',
            'nic' => 'required',
        ]);
        Student::create($request->all());
        return redirect()->route('student.index');
    }

    
    public function show(string $id)
    {
        $students = Student::find($id);
        return view('student.show', compact('students'));
    }

    
    public function edit(string $id)
    {
        $students = Student::find($id);
        return view('student.edit', compact('students'));
    }

    
    public function update(Request $request, string $id)
    {
        $request->validate([
            'admission_no' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'dob' => 'required|date',
            'course_id' => 'required',
            'nic' => 'required',
        ]);
        $students = Student::find($id);
        $students->update($request->all());
        return redirect()->route('student.index', compact('students'));
    }

    
    public function destroy(string $id)
    {
        Student::destroy($id);
        return redirect()->route('student.index');
    }
}
