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


// Apply Controller to view the Data From database
Route::get('list',[UsersController::class,'viewData']); // when you click on delete btn, it gives path as [delete/current_id]

// Apply Controller to delete The Data From database
Route::get('delete/{id}',[UsersController::class,'deleteData']); //apply delete on incoming path and id
//Also here we are defining id as route paramerter by {id}

// Apply Controller to view for Edit The Data From database
Route::get('edit/{id}',[UsersController::class,'editData']);

// Apply Controller to update after Edit The Data From database
Route::post('update',[UsersController::class,'updateData']);



