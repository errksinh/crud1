<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud1s;

class StudentController extends Controller
{
    public function index(){
        return view('students.index');
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
}

