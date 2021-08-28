<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;



// import Model
use App\Models\Employee;

class UsersController extends Controller
{
   function SaveData(Request $req)
   {
   
      // To create an object of the model to save new datas
      $sData=new Employee;

      // Assign here table colum name=incoming form filed name
      $sData->id=$req->id;
      $sData->name=$req->name;
      $sData->email=$req->email;

      // To Save data of the stored variable  to database just by calling the save() method
      $sData->save();

      // After data Saving return to home data entry page's path
      return redirect('addData');
   }
 
}
