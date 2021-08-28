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





// import Mail Class
use App\Mail\SampleMail;

Route::get('/', function () {
    // its a clss so we have to create an object of that class
    return new SampleMail();
});




