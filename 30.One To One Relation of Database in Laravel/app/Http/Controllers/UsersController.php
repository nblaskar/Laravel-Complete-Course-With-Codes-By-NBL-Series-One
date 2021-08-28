<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;



// import Model Class
use App\Models\Employee;

class UsersController extends Controller
{
   function otorFun()
   {
      
      // get the data from company table where given id of Employee table  is matched
      return Employee::find(101)->getCompany;
   }


 
}
