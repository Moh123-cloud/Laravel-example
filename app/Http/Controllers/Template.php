<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    //
    function viewLoad(){
        return view("users");
    }
}