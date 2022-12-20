<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class httpRequest extends Controller
{
    //
    function index(Request $req)
        {
            return $req->input();
        }
}