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

        $attributes = $request->validate([
            'studentname' => ['required', 'string', 'unique:students'],
            'course' => ['required'],
            'fee' => ['required']
        ]);

        Students::create($attributes);

        return redirect('/student')->with('success', 'Student details has been added Successfully!');
  }
  
    //    $request->validate(['studentname' => 'required', 'course' => 'required', 'fee' => 'required',]);
    //    $student= new Students();

    //    $student->studentname = $request->studentname;
    //    $student->course = $request->course;
    //    $student->fee = $request->fee;

      //    $student->save();



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
        $student->studentname = $request->studentname;
        $student->course = $request->course;
        $student->fee = $request->fee;


        $student->save();
        return redirect('/student')->with('success','Student info has been updated successfully!');
    }

    public function destroy(Students $student)
    {
        $student->delete();
        return redirect('/student')->with('success','Student details has been deleted successfully!');
    }

}
