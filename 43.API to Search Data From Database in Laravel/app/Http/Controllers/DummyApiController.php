<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

// import Model
use App\Models\Employee;

class DummyApiController extends Controller
{
    //Incomming data receive here by $sdata and allow to search data from database by this function
    function SearchApiData($sdata)
    {
        // Process-1
        // Match Complete Word
        // return Employee::where("name",$sdata)->get();

                // OR

        // Process-2
        // Match by Character
        return Employee::where("name","like","%".$sdata."%")->get();
    }
}
