<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function index(){
        // return "hello";
        $data = array(
            'title' => "Laravel",
            'details' => "This is home page"
        );
        return view('home')->with($data);
    }

    //
    public function about(){
        $data = array(
            "title" => "About",
            "details" => "This is about page"
        );
        return view("about")->with($data);
    }

    //
    public function dashboard(){
        $data = array(
            'title' => "Dashboard",
            'details' => "This is dashboard page",
            'names'=>['a','b']
        );
        return view("dashboard")->with($data);
    }


}
