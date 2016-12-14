<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function action(){
    	return view('php_test.action');
    }
}
