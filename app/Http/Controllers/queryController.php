<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class queryController extends Controller
{
    //
    function dbOperation(){
        return DB::table('users')->min('id');

        //insert into db
        /* ->insert(
            [
                'name'=>'Angeline',
                'email'=>'angeline@gmail.com',
                'address'=>'USA'
            ]
            );
             */
            


        //update into db
        /* ->where('id', 10)
        ->update(
            [
                'name'=>'Angeline',
                'email'=>'angeline@gmail.com',
                'address'=>'UK'
            ]
            );
 */

        //delete from database
        /* ->where('id', 10)->delete(); */



        /* return view('query', ['data'=>$data]); */
    }
}