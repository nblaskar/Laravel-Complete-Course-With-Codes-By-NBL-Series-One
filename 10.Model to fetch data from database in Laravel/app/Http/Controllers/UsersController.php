<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


// import Model
use App\Models\Employee;

class UsersController extends Controller
{
   function fetchData()
   {
       return Employee::all();

   }
 
}
