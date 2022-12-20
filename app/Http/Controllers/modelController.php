<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import model
use App\Models\Userss;

class modelController extends Controller
{
    //
    function getController()
        {
            return User::all();
        }
}
 