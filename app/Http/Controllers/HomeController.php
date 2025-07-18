<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $students  = Student::all();
        return view('welcome', compact('students'));
    }


    public function show($id){
        $student  = Student::find($id);
        return view('show', compact('student'));
    }

}
