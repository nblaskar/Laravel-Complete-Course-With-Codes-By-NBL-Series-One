<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;



// import DB class
use Illuminate\Support\Facades\DB;

// import Model Class
use App\Models\Employee;

class UsersController extends Controller
{
   function AccFun()
   {
      // To return all the datas of database comming through Models
      return Employee::all();
   }

 
}
