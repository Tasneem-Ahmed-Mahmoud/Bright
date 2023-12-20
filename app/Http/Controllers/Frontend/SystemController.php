<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemController extends Controller
{


    function login(){
        return view('frontend.system.login');
        
    }

    function register(){
        return view('frontend.system.register');
        
    }

    function reservation(){
        return view('frontend.system.reservation');
        
    }

    function password(){
        return view('frontend.system.forget');
        
    }
    function quote(){
        return view('frontend.system.quote');
        
    }

   
}
