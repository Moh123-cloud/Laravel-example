<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class joinController extends Controller
{
    //
    function show(){
        return DB::table('company')
        ->join('employees', 'employee_id', "=", 'employees.employee_id')
        //->select('employees.*')
        ->where('employees.id',11)
        ->get();
    }
}