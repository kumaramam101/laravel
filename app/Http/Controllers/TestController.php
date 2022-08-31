<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class TestController extends Controller
{
    public function index()
    {
       return view('student'); 
    }

    public function store(Request $request)
    {
        print_r($request);
        echo "ok";
        // $student = new student;
        // $student->name = $request['name'];
        // $student->email = $request['email'];
        // $student->name = $request['phone'];
        // $student->name = $request['city'];
        // $student->save();
        //return view('insert');
    }

    public function data(){
        echo "not an error";
    }
}
