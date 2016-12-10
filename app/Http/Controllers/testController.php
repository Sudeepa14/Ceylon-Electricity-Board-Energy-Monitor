<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
   publc function test_method(){
   		return view("test");
   }
}
