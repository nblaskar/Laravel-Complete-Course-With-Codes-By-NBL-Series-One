<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyApiController extends Controller
{
    //it works as an API to returns array datas
    function apiData()
    {
        return ["id"=>"101","name"=>"nur","email"=>"nbl@gmail.com"];
    }
}
