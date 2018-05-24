<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //index function to run base layout view of admin panel
    public function index(){
        return view('admin.layouts.layouts');
    }
}
