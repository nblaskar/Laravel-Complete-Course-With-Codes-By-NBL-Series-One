<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;



// import DB class
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
   function joinfn()
   {
      //To Fetch Only the joined tables all data
      // return DB::table('stdnts')
      // ->join('cmpny','stdnts.id',"=",'cmpnt_id')
      // ->get();

               // OR

      //To Fetch only the joined tables all data from a particular table
      // return DB::table('stdnts')
      // ->select('cmpny.*')
      // ->join('cmpny','stdnts.id',"=",'cmpnt_id')
      // ->get();
      
               // OR

      //To Fetch only the joined tables all data from a particular table where  company name is google
      return DB::table('stdnts')
      ->select('cmpny.*')
      ->join('cmpny','stdnts.id',"=",'cmpnt_id')
      ->where('cmpny.name','google')
      ->get();
   }

 
}
