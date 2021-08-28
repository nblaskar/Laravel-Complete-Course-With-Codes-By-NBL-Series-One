<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

// import Model 
use App\Models\Employee;

// API Controller For Secure Access
class DummyApiController extends Controller
{
   function getData(){
    return Employee::all();
   }
}
