<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;




class UsersController extends Controller
{
   function userLogin(Request $req)
   {
      //Store incoming data to a variable as array
    $data= $req->input();
   //  Data Store to a session Veriable
    $req->session()->put('user',$data['user']);

    return redirect('profile');


   }
 
}
