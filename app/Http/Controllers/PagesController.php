<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

	

    public function about(){
    	$name = "<span style ='color:red;'>Darshana buddhika</span>";

    	return view("about")->with("name", $name);
    }
}
