<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// import Controller
use App\Http\Controllers\DummyApiController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Apply Sanctum Authentication on route
Route::group(['middleware' => 'auth:sanctum'], function (){
    // Add routes Here for secure access
    Route::get("show",[DummyApiController::class,'getData']);
    
});

// Route Api for Login
Route::post("login",[UsersController::class, 'index']);