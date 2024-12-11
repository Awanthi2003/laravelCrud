<?php

namespace App\Http\Controllers;
use App\Models\student;
use Illuminate\Http\Request;

class StudentController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = student::all();
        return view('students.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:students',
            'phone'=> 'required',
        ]);

        student::create(attributes: $request->all());
        return redirect()->route('students.index')->with('success','students Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request ,student  $student)
    {
        $request->validate([
            'name'=> 'required',
            'email'=> 'required[email]unique:student,email',
            'phone'=>'required'
            ]);
            $student-> update($request->all());

            return redirect()->route('student.index')->with('success','student update sucessfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success','student deleted successfully.');
    }
}
