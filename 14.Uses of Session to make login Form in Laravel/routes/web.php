<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});



// import Controller
use App\Http\Controllers\UsersController;

Route::post('ulogin',[UsersController::class,'userLogin']);
Route::view('profile','profile');

//To Delete Session data
Route::get('/logout', function () {
    //check the session data stored or not
    if(session()->has('user'))
    {
        //delete the session data
        session()->pull('user');
    }
    return redirect('login');
});

//Already login user redirect to profile page
Route::get('/login', function () {
    //check the session data stored or not
    if(session()->has('user'))
    {
       return redirect('profile');
    }
    return view('login');
});

