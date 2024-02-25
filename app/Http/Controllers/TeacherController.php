<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teacher.index', compact('teachers'));
    }

    public function create()
    {
        return view('teacher.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'dob' => 'required|date',
            'nic' => 'required',
        ]);

        Teacher::create($request->all());
        return redirect()->route('teacher.index');
    }

    public function show($id)
    {
        $teachers = Teacher::findOrFail($id);
        return view('teacher.show', compact('teachers'));
    }

    public function edit($id)
    {
        $teachers = Teacher::findOrFail($id);
        return view('teacher.edit', compact('teachers'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'dob' => 'required|date',
            'nic' => 'required',
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());
        return redirect()->route('teacher.index');
    }

    public function destroy($id)
    {
        Teacher::findOrFail($id)->delete();
        return redirect()->route('teacher.index');
    }
}
