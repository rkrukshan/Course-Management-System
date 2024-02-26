<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\StudentCourse;
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
        $course = Course::findOrFail($id);
        // Assuming you want to fetch related student courses for this specific course
        $studentCourses = StudentCourse::where('course_id', $id)->get();
        return view('course.show', compact('course', 'studentCourses'));
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('course.edit', compact('course'));
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

    public function apply(Request $request)
    {
        $request->validate([
            'course_id' => 'required',
            'student_id' => 'required',
        ]);

        $studentCourse = new StudentCourse;
        $studentCourse->course_id = $request->course_id;
        $studentCourse->student_id = $request->student_id;
        $studentCourse->save();

        return redirect()->route('course.index');
    }

    public function accept_approval($id)
    {
        $studentCourse = StudentCourse::findOrFail($id);
        $studentCourse->status = 'Accepted';
        $studentCourse->save();
        return redirect()->route('studentCourse.index');
    }

    public function reject_approval($id)
    {
        $studentCourse = StudentCourse::findOrFail($id);
        $studentCourse->status = 'Rejected';
        $studentCourse->save();
        return redirect()->route('studentCourse.index');
    }
}
