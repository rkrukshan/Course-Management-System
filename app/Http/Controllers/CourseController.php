<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    public function create()
    {
        return view('course.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'course_order' => 'required',
            'course_index' => 'required',
        ]);

        Course::create($request->all());
        return redirect()->route('course.index');
    }

    public function show($id)
    {
        $courses = Course::findOrFail($id);
        return view('course.show', compact('courses'));
    }

    public function edit($id)
    {
        $courses = Course::findOrFail($id);
        return view('course.edit', compact('courses'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'course_name' => 'required',
            'course_order' => 'required',
            'course_index' => 'required',
        ]);

        $course = Course::findOrFail($id);
        $course->update($request->all());
        return redirect()->route('course.index');
    }

    public function destroy($id)
    {
        Course::findOrFail($id)->delete();
        return redirect()->route('course.index');
    }
}