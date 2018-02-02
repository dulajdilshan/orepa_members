<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempController extends Controller
{
    function index($title){
        return view('child')->with('title',$title);
    }
}
