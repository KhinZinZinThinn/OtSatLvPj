<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function getDashboard(){
        return view("dashboard");
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
