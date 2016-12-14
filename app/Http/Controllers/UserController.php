<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

//function to login web.

    public function Login(Request $request){

     return UserDAOController::userLogin($request);

        if (empty($user)){
            // echo "adadff";
            //return  redirect()->route('login');
        }

        else {

           // return redirect('/register');

        }
        //return  redirect('/');


    }

//function to register

    public function Register(Request $request){

    	$firstName = $request['fname'];
    	$lastName = $request['lname'];
    	$userName = $request['uname'];
    	$password = bcrypt($request['Password']);

        UserDAOController::registerUser($request);

       //DB::insert('insert into users (firstName,lastName) values (?,?)',[$firstName,$lastName]);

    }


}
