<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    function getData(Request $req){
        // input() allow to print the users input datas
        return $req->input();
    }
}
