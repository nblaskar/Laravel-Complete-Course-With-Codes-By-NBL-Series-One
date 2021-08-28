<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;



// import Model
use App\Models\Employee;

class UsersController extends Controller
{
   function showTable()
   {
      // Retrive all Data From Table without Pagination
      // $datas= Employee::all();

      // Apply Pagination to retrive some of data per page
      $datas= Employee::paginate(5); //here parameter is the number of item per page

      // Return View by passing the Fetched Data
      return view('list',['listData'=>$datas]);

   }
 
}
