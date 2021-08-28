<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;



// import Model Class
use App\Models\Employee;

class UsersController extends Controller
{
   function otmFun()
   {
      
      // get the data from Laptop table where given id of Employee table  is matched
      return Employee::find(102)->getLaptop;
   }


 
}
