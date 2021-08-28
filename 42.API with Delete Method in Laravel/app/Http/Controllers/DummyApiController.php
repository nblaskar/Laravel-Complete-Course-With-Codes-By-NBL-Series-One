<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

// import Model
use App\Models\Employee;

class DummyApiController extends Controller
{
    //Incomming data receive here by $id and allow to delete data from database by this function
    function DeleteApiData($id)
    {
        $emp=Employee::find($id); //Target the data by id
        $result=$emp->delete();
        // after Delete returns the result message
        if($result)
        {
            return ["result"=>"Delete Successfull  " . $id];
        }
        else{
            return ["result"=>"Delete Failed  " . $id];
        }
    }
}
