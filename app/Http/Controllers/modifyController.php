<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class modifyController extends Controller
{
    //
    
    function index(){
        $member = new member;
        $member->name="Mose"; 
        $member->email='thaiya@gmail.com';
        $member->save();
    }
}