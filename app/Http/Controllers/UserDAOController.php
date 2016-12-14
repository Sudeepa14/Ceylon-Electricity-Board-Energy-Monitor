<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserDAOController extends Controller
{

	public function getUsers(){

		
	}
	public static function registerUser($request){

        DB::insert('insert into users (firstName,lastName) values (?,?)',[$request['fname'],$request['lname']]);
// TODO  name is
	}

	public static  function userLogin($request){

       $user =  DB::select('select userName,password from passwords where userName = ? and password = ? ',[$request['username'],$request['password']]);

       // return $user;

       if (empty($user)){
        
           return  redirect()->route('login');

       }
       else {
          return redirect()->route('dashboard');
       }
	}

}
    
