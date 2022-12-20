<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;


class oneController extends Controller
{
    //
     function index(){
        return Employee::find(1)->getOne;
    }
}