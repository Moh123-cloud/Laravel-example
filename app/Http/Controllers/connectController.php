<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class connectController extends Controller
{
    //
    function index(){
        return DB::connection('mysql2')->table('users')->get();
    }
}