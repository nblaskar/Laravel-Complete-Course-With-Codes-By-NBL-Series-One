<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;




class UsersController extends Controller
{
   function uploadFile(Request $req)
   {
      //Catch file by field name and store to a particular folder
      return $req->file('profile')->store('docs');

   }
 
}
