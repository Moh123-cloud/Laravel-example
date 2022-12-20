<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    //
    function index(Request $req){
        $result = $req->file('file')->store('apiDocs');
        return ["result"=>$result];
    }
}