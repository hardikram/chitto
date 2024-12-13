<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser($name){
        // return "Hardik Ram";
        return view('about',['name'=>$name]);
    }
    function getUserName($name){
        return "Hi ". $name;
    }
}
