<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function index(){
        // return "hello";
        return view("home");
    }

    //
    public function about(){
        // return "hello";
        return view("about");
    }

    //
    public function dashboard(){
        // return "hello";
        return view("dashboard");
    }


}
