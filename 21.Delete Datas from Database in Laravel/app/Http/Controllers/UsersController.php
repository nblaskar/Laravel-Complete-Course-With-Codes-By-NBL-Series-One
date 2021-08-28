<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;



// import Model
use App\Models\Employee;

class UsersController extends Controller
{
   // Controller Function to retrive data from database
   function viewData()
   { 
      // it get all datas from the table
      $getData=Employee::all();

      // it returns the list view by passing the above retrieved data as an array
      return view('list',['memberData'=>$getData]);
   }

   // Controller Function to delete data from database
   function deleteData($ids)//$id is comming by path
   { 
      //this variable store incoming id's row
      $deleteData=Employee::find($ids);

      // apply delete() method on this variable to delete entire row data
      $deleteData->delete();

      // After deleting return to same page view
      return redirect('list');
     
   }
 
}
