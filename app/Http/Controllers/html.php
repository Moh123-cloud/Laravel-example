<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class html extends Controller
{
    //
    function getData(Request $req){
        $req->validate([
            'username'=>'required | max:10',
            'password'=>'required | min:5'
        ]);

        return $req->input();
    }
}