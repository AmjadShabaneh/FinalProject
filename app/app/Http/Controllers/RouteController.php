<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    function welcome(){
        return view("welcome");
    }
    function login(){
        return view("login");
    }
    function search(){
        return view("search");
    }
    function profile(){
        return view("profile");
    }
    function portfoilo(){
        return view("portfoilo");
    }
}
