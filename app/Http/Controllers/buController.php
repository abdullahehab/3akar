<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class buController extends Controller
{
    public function index(){
        return view('admin.bu.index');
    }
}
