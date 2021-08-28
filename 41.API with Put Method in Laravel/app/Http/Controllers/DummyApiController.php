<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

// import Model
use App\Models\Employee;

class DummyApiController extends Controller
{
    //Incomming data receive here by request class and update in database by this function
    function PutApiData(Request $req)
    {
        $emp=Employee::find($req->id); //Target the data by id
        $emp->name=$req->name;
        $emp->email=$req->email;
        $result=$emp->save();
        // after update returns the result message
        if($result)
        {
            return ["result"=>"Update Successfull"];
        }
        else{
            return ["result"=>"Update Failed"];
        }
    }
}
