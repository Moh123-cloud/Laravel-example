<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kamau extends Controller
{
    //
    function viewLoad(){
        $data=['Moh', 'Nes', 'Joe', 'Appointed'];
        return view('users', ['users'=>$data]);
    }

}