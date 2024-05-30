<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homepage extends Controller
{
    //
    public function showHomepage(){
        return view('homepage');
    }
    public function showDashboard(){
        return view('dashboard');
    }
}
