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

// Import The created Controloler
use App\Http\Controllers\UsersController;

// Router Define for html page view
Route::view("login","users");


//Router Defined for submitting html data to controller
Route::post("users",[UsersController::class, 'getData']);