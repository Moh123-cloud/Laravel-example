<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    //
    function index(Request $req)
    {
        $data = $req->input();
        $req->session()->put("usersession", $data["Username"]);
        return redirect('profile');
    }
}