<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
//return the about page in view folder
    public function about(){
    	$name = "Drashana Buddhika";

    	return view("about")->with("name", $name);
    }
//return the login page in view folder
    public function login (){
    	return view("login");

        echo "darshana";
    }
//retunr the register page in view folder
    public function register(){
    	return view('register');
    }

    public function dashboard(){
        return view('dashboard');
    }
}
