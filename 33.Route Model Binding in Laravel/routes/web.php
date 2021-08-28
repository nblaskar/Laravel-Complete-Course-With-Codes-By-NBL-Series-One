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

//Here By Defalut Route Parameter is considered as table's ids
// Route::get('show/{key}',[UsersController::class,'rmbFun']);

               // OR

// We can also change the default Route Parameter table's id into another table column's names
Route::get('show/{key:email}',[UsersController::class,'rmbFun']);



