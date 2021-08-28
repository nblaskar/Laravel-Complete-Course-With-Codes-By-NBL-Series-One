<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;



// import DB class
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
   function ag_Oprsn()
   {
      // a)avg()
      // return DB::table('employees')->avg('id');

               // OR
      
      // a)sum()
      // return DB::table('employees')->sum('id');
      
               // OR

      // a)count()
      // return DB::table('employees')->count('id');
      
               // OR

      // a)max()
      // return DB::table('employees')->max('id');
      
               // OR

      // a)min()
      return DB::table('employees')->min('name');
   }
 
 
}
