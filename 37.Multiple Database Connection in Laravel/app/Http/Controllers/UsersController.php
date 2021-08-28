<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

// // Process-1
// // Fetch data without Model only by Using controller
// // import DB Class
// use Illuminate\Support\Facades\DB;

// class UsersController extends Controller
// {
//     function showData()
//     {
//       //  To access firts database
//       //  return DB::table('laptops')->get();

//       //  To access 2nd database
//        return DB::connection("mysql2")->table('products')->get();
//     }
// }

// Process-2
// Fetch data with the help of Model
// import Model Classes
use App\Models\Laptop;
use App\Models\Product;

class UsersController extends Controller
{
    function showData()
    {
      //  To access firts database
      //  return Laptop::all();

      //  To access 2nd database
      return Product::all();//for that you have to define connection variable inside this model
      
    }
}
