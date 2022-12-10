<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function indexhome(){
        return view('Home.home');
    }

    public function indexdashboard(){
        return view('Admin_panel.dashboard');
    }
}
