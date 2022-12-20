<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import Http Client
use Illuminate\Support\Facades\Http;

class httpController extends Controller
{
    //
    function http()
        {
            //return Http::get("https://reqres.in/api/users?page=1");
            $collection = Http::get("https://reqres.in/api/users?page=1");
            return view('http', ['collection'=>$collection['data']]); 
        }
}