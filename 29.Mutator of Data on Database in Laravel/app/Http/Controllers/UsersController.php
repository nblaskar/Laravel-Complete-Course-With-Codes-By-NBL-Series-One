<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;



// import DB class
use Illuminate\Support\Facades\DB;

// import Model Class
use App\Models\Employee;

class UsersController extends Controller
{
   // Function to insert some data in table on database
   function mttrFun()
   {
      $employee= new Employee;
      $employee->name='nbl';
      $employee->email='nbl@gmail.com';
      $employee->save();

      // Message after insertion
      return "Successful";
   }


 
}
