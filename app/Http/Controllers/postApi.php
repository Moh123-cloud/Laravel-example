<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company; 
use Validator;

class postApi extends Controller
{
    //adding data in database using post api
    function post(Request $req){
       $company = new Company;
       $company->name = $req->name;
       $company->email = $req->email;
       $result = $company->save();

       if($result){
            return ["Result"=>"Data have been successfully saved"];
       }
       else{
        return ["Result"=>"Operation Failed"];
       }
    }

    //updating data in database using put api
    function put(Request $req){
        $company = Company::find($req->id);
        $company->name = $req->name;
        $company->email = $req->email;
        $result = $company->save();

        if($result){
            return ["Result"=>"Updated"];
        }
        else{
            return ["Result"=>"Updating failed"];
        }
    }


    //Deleting data in the api using delete api
    function delete($id){
        $company = Company::find($req->id);
        $result = $company->delete();

         if($result){
            return ["Result"=>"Updated"];
        }
        else{
            return ["Result"=>"Updating failed"];
        }
    }

    //Searching data using search api
    function search($name){
        return Company::where('name','like', '%'. $name.'%')->get();
    }

    //Api Validation
    function index(Request $req){
        $rules = array(
            "email"=>"required|min:4|max:20"
        );
        $validate = Validator::make($req->all(), $rules);

        if($validate->fails()){
            return $validate->errors();
        }
        else{
            $company = new Company;
            $company->name = $req->name;
            $company->email = $req->email;
            $result = $company->save();

            if($result){
                return ["Result"=>"Operation successful"];
            }
            else{
                return ["Result"=>"Updating failed"];
            }
        }
        
    }


}