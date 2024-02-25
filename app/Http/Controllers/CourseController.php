<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\StudentCourse;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

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
        $studentcourses= StudentCourse::all();
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

    public function apply(Request $request)
    {
        // return true;
        $sc=new StudentCourse;
        $sc->course_id=$request->id;
        $sc->student_id=$request->student_id;
        // return $sc;
        StudentCourse::create($sc);
        return redirect()->route('Course.index');
    }
    public function accept_approval(string $id)
    {
        $studentcourses = StudentCourse::findOrFail($id);
        $studentcourses->status = 'Accepted';
        $studentcourses->update();
        return redirect()->route('studentCourse.index');
    }


    public function reject_approval(string $id)
    {
        $studentcourses = StudentCourse::findOrFail($id);
        $studentcourses->status = 'Rejected';
        $studentcourses->update();
        return redirect()->route('studentCourse.index');
    }
}