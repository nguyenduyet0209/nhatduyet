<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{
    //
    public function getHome(){
    	return view('backend.index');
    }

    public function getLogOut(){
    	Auth::logout();
    	return redirect()->intended('login');
    }
}
