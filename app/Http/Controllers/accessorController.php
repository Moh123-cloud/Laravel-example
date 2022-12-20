<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class accessorController extends Controller
{
    //
    function access(){
        return Employee::all();
    }

}