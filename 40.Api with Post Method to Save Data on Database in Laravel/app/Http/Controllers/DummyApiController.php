<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

// import Model
use App\Models\Employee;

class DummyApiController extends Controller
{
    //Incomming data receive here by request class and save in database by this function
    function PostApiData(Request $req)
    {
        $employee=new Employee;
        $employee->name=$req->name;
        $employee->email=$req->email;
        $result=$employee->save();
        // after save returns the result message
        if($result)
        {
            return ["result"=>"Insertion Successfull"];
        }
        else{
            return ["result"=>"Insertion Failed"];
        }
    }
}
