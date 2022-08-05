<?php

namespace App\Http\Controllers;

use App\Student;
use Request;

class StudentController extends Controller
{
    
    public function index()
    {
        $data = Student::get();
        return view ('students.index',compact('data'));
    }

    public function create()
    {
        return view ('students.create');
    }

    public function store(Request $request)
    {
        Student::create(Request::all());
        return redirect()->route('students.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
