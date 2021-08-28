<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;



// import DB class
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
   function dbOperations()
   {
      // 1)Standard Uses
      // $dbData= DB::table('employees')->get(); //it take the employees table of database and get all the datas.
      // return view('list',['tableData'=>$dbData]);

                  // OR

      // 2)Custom Uses
      // Here we can use some custom queries as follows

      // Example-1
      //  return DB::table('employees')->get();

      
                  // OR

      // Example-2
      // ->retrive data by perticular fields Values
      //  return DB::table('employees')
      //  ->where('id',103)
      //  ->get();

      
                  // OR

      // Example-3
      // ->retrive data by id with find() which takes only id as parameter
      //  return (array)DB::table('employees')->find(101);//here to use find() you have to convert it into array

      
                  // OR

      // Example-4
      // ->to count the total records
      //  return DB::table('employees')->count();

      
                  // OR

      // 3)CRUD Operation
      // a)Insert
         // return DB::table('employees')
         // ->insert(
         //       [
         //          'name'=>'Firdaus',
         //          'email'=>'fd@gmail.com'
         //       ]
         //    );

         // O/P->Returns 1 for Successfull

         
                  // OR


      // b)Update
         // return DB::table('employees')
         // ->where('id',107)
         // ->update(
         //       [
         //          'name'=>'Firdaus',
         //          'email'=>'firdaus@gmail.com'
         //       ]
         //    );

         // O/P->Returns 1 for Successfull

         
                  // OR


      // c)Delete
         return DB::table('employees')
         ->where('id',104)
         ->delete();

         // O/P->Returns 1 for Successfull


   }
 
 
}
