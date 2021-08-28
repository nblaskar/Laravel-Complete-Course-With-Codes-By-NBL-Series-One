<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;



// import Model Class
use App\Models\Employee;

class UsersController extends Controller
{
   // Controller to returns incomming parameters data
   function rmbFun(Employee $key)//Passed parameter Type should be Your model name
   {
      return $key;
   }


 
}
