<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;




class UsersController extends Controller
{
   function addData(Request $req)
   {
      //Store incoming data to a variable as array
    $data=$req->input('user');

   //Data Store to a Flash session Veriable
    $req->session()->flash('user',$data);

      // Redirect to home Page
    return redirect('adding');


   }
 
}
