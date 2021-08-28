<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

// import Model
use App\Models\Employee;

class DummyApiController extends Controller
{
    //it works as an API to returns model's data
    function GetApiData()
    {
        return Employee::all();
    }
}
