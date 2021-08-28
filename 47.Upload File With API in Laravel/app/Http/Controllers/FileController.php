<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    function uploadFile(Request $req)
    {
        // Save image in apiDocs Folder inside storage/app directory
        $result=$req->file('imgFile')->store('apiDocs');
        // return image name
        return ["result"=>$result];
    }
}
