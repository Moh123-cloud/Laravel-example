<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import the database 
use Illuminate\Support\Facades\DB;

class databaseController extends Controller
{
    //
    function index()
    {
        return DB::select("select * from users");
    }
}