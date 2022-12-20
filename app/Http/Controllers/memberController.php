<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class memberController extends Controller
{
    //showing list from database
    function show(){
        $data = user::all();
        return view('list', ['models'=>$data]);
    }

    //deleting a column
    function delete($id){
        $data = user::find($id);
        $data->delete();
        return redirect('list');
    }

    //Pagenation
    /* function show(){
        $data = user::paginate(2);
        return view('list', ['models'=>$data]);
    } */
}