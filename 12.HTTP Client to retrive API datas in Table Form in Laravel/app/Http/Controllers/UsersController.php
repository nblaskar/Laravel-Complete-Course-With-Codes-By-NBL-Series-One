<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


// import http
use Illuminate\Support\Facades\Http;

class UsersController extends Controller
{
   function fetchData()
   {
    $collection= Http::get("https://reqres.in/api/users?page=1");
    return view('users', ['collection'=>$collection['data']]);

   }
 
}
