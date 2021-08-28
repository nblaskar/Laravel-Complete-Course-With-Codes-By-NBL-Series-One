<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import the User Model class
use App\Models\User;

// Import the Hash Class
use Illuminate\Support\Facades\Hash;




class UsersController extends Controller
{
    //login controller function
    function index(Request $request)
    {
        $user=User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return response([ 
                'message'=>['These credentials do not match our records.']
            ], 400);
        }
        // This tokens value is used for authentication of the user loged or not
        $token=$user->createToken('my-app-token')->plainTextToken;
        $respose=[
            'user'=>$user,
            'token'=>$token
        ];
        return response($respose, 201);
    }
    
}
