<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class simpleApi extends Controller
{
    //
    function index(){
        return ['name'=>'Moses', 'email'=>'moses@gmail.com', 'address'=>'Dubai'];
    }
}