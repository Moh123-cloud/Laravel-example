<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class dataApi extends Controller
{
    //
    function index(){
        return Employee::all();
    }
}