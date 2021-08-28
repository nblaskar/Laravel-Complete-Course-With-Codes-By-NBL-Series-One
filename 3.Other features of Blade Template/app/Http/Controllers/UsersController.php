<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function viewLoad(){
        // Simple return view by Controller
        // return view('employees');

        // For Using the PHP inside JavaScript
        $data=['Ramjan','Firdaus','Kiran','Pri'];
        return view('employees',['users'=>$data]);
    }
}
