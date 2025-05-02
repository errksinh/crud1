<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud1s;

class StudentController extends Controller
{
    public function index(){
        $stud=crud1s::all();
        return view('students.index',['crud1s'=>$stud]);
                                    // module array to store value from tab
    }
    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request){
        $data=$request->validate([
            'name'=>'required',
            'dob'=>'required',
            'address'=>'required',
            'email'=>'required',
            'mobile'=>'required'

        ]);
        $newStudent=crud1s::create($data);
        //var   model   function to store $data auto
        return redirect(route('student.index'));
        // return to index      route->name
    }
    public function edit(crud1s $student){
                    //module from web>url
                    //dd($student);
                    return view('students.edit',['student'=>$student]);
    }
    public function update(crud1s $student, Request $request){
        $data=$request->validate([
            'name'=>'required',
            'dob'=>'required',
            'address'=>'required',
            'email'=>'required',
            'mobile'=>'required'

        ]);
        $student->update($data);
        return redirect(route('student.index'));
    }
    public function destroy(crud1s $student)
    {
            $student->delete();
            return redirect(route('student.index'))->with('success','msg done');   
    }
}

