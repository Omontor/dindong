<?php

namespace App\Http\Controllers\Frontend;


use Auth;
use Redirect;

class HomeController
{
    public function index()
    {

        if(Auth::user()->userinfo->count() == 0){
            return redirect()->route('frontend.perfil.index'); 
        }
        else{

           return view ('frontend.home'); 
        }
    }
}
