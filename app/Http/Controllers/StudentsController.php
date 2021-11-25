<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
   public function index(){

       $student = Students::all();
       return view('student.index', compact('student'));
   }

   public function create(){

    return view('student.create');
}

   public function store(Request $request){
  
       $request->validate(['studentname' => 'required', 'course' => 'required', 'fee' => 'required']);
       $student= new Students();
       $student->studentname = $request->studentname;
       $student->course = $request->course;
       $student->fee = $request->fee;

       $student->save();
         return redirect('/home')->with('success', 'Student details has been added Successfully!');
   }

   public function show(Students $student)
    {
        return view('student.show', compact('student'));
    }

    public function edit(Students $student)
    {
        return view('student.edit', compact('student'));
    }

    public function update(Students $student, Request $request)
    {
        $request->validate(['studentname' => 'required', 'course' => 'required', 'fee' => 'required']);
        $student->title = $request->title;
        $student->body = $request->body;
        $student->published_at = $request->published_at;

        $student->save();
        return redirect('/home')->with('success','Student info has been updated successfully!');
    }

    public function destroy(Students $student)
    {
        $student->delete();
        return redirect('/home')->with('success','Student details has been deleted successfully!');
    }

}
