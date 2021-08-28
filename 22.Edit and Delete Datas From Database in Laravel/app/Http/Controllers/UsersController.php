<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;



// import Model
use App\Models\Employee;

class UsersController extends Controller
{
   // Controller Function to retrive data from database and return as array as route parameter
   function viewData()
   { 
      $getData=Employee::all();
      return view('list',['memberData'=>$getData]);
   }

   // Controller Function to delete data from database
   function deleteData($ids)//$id is comming by path
   { 
      //this variable store incoming id's row
      $dData=Employee::find($ids);

      // apply delete() method on this variable to delete entire row data
      $dData->delete();

      // After deleting return to same page view
      return redirect('list');
     
   }
   // Controller Function to view for Edit The Data From database
   function editData($ids)//$id is comming by path
   { 

      // Target and return the incomming id's rows Data
      $eData= Employee::find($ids);
      return view('edit',['edata'=>$eData]);
     
   }

   // Controller function to update after Edit The Data From database
   function updateData(Request $req)
   {
      // target the incoming request's ids row and reassign these values by im=ncoming formn values
      $uData= Employee::find($req->id);
      $uData->name=$req->name;
      $uData->email=$req->email;
      $uData->save();
      return redirect('list'); //after save redirect to main page
   }
 
}
