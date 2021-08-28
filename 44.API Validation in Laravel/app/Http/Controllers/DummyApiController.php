<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

// import Model
use App\Models\Employee;

// Import Validator Class
use Illuminate\Support\Facades\Validator;

class DummyApiController extends Controller
{
    //Incomming data receive here by Request Class and save in database by this function
    function valdnApi(Request $req)
    {
        // Rules defining to apply on api for validation
        $rules=array(
            "name"=>"required | min:2 | max:4",
        );

        // Apply the rules on incomming Api request By Validator class for validation
        $validator=Validator::make($req->all(), $rules);
        if($validator->fails()){

            // To returns simple validation error message
            return $validator->errors();

                            // OR

            // also can returns error message and  response status code
            // return response()->json($validator->errors(),401);

        }else{
            // Save the data on database and returns the result message
            $emp= new Employee;
            $emp->name=$req->name;
            $emp->email=$req->email;
            $results=$emp->save();
            if($results){
                return ["result"=>"Success"];

            }else{
                return ["result"=>"Failed"];
            }            
        }
      
    }
}
