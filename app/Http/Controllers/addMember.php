<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class addMember extends Controller
{
    //
    function add(Request $req){
        $user = new user;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->address = $req->address;
        $user->save(); 
        return redirect('save');
    }
}