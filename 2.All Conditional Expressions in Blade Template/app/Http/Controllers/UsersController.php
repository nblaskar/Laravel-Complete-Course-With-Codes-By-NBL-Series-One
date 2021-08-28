<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function viewLoad(){
        // Simple return view by Controller
        // return view('employees');

        // // Pass data from contoller to blade template and can use php function on them
        // return view('employees',['users'=>['Anil','Rahul','karim']]);

        // For Using the  if else Condition in Blade Template
        // return view('employees',['users'=>'Firdaus']);

        // For Using the For Each Loop
        $data=['Ramjan','Firdaus','Kiran','Pri'];
        return view('employees',['users'=>$data]);
    }
}
