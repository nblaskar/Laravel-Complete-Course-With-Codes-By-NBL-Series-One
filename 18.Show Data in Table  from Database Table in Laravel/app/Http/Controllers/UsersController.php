<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;



// import Model
use App\Models\Employee;

class UsersController extends Controller
{
   function showTable()
   {
      $datas= Employee::all();
      return view('list',['listData'=>$datas]);

   }
 
}
