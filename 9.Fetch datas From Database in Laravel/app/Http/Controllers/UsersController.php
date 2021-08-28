<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import Database
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
   function index()
   {
       return DB::select("select * from student");

   }
 
}
