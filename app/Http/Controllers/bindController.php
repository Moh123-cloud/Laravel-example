<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class bindController extends Controller
{
    //
    function index(Employee $key){
        return $key;
    }
}