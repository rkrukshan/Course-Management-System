<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\StudentCourse;
use Illuminate\Http\Request;

class StudentCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentcourses= StudentCourse::all();
        // return $studentcourses;
        return view("student-course.index",compact("studentcourses"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student-course.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'student_id' => 'required',
        'course_id' => 'required', // Removed |date validation, assuming it's not necessary
        'status' => 'required',
    ]);
        StudentCourse::create($request->all());
        return redirect()->route('Student-Course.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $studentcourses = StudentCourse::findOrFail($id);
        return view('student-course.show', compact('studentcourses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $studentcourses = StudentCourse::findOrFail($id);
        return view('student-course.edit', compact('studentcourses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'student_id' => 'required',
            'course_id' => 'required|date',
            'status' => 'required',
        ]);
        $studentcourses = StudentCourse::findOrFail($id);
        $studentcourses->update($request->all());
        return redirect()->route('student-course.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        StudentCourse::findOrFail($id)->delete();
        return redirect()->route('student-course.index');
    }
    public function course(Request $request)
    {
        $courses= Course::all();
return view('course.create', compact(''));
    }
    
}
