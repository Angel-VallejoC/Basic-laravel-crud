<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
    	$students = Student::all();
    	return view('student.index', ['students' => $students]);
    }

    public function add()
    {
    	return view('student.add');
    }

    public function addSave(Request $request)
    {
    	$this->validate($request, [
        	'name' => 'required|max:20|string',
        	'last_name' => 'required|max:20|string',
        	'grade' => 'required|max:2'
    	]);

    	$student = new Student();
    	$student->name = $request->name;
    	$student->last_name = $request->last_name;
    	$student->grade = $request->grade;
    	$student->save();
    	return redirect()->route('students.index');
    }

    public function edit($id)
    {
    	$student = Student::findOrFail($id);
    	return view('student.edit', ['student' => $student]);
    }

    public function editSave(Request $request, $id)
    {
    	$this->validate($request, [
        	'name' => 'required|max:20|string',
        	'last_name' => 'required|max:20|string',
        	'grade' => 'required|max:2'
    	]);

    	$student = Student::findOrFail($id);
    	$student->name = $request->name;
    	$student->last_name = $request->last_name;
    	$student->grade = $request->grade;
    	$student->save();
    	return redirect()->route('students.index');
    }

    public function delete($id)
    {
    	$student = Student::findOrFail($id);
    	$student->delete();
    	return view('student.index');
    }

}
