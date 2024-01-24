<?php

use App\Http\Controllers\ApidataController;
use App\Http\Controllers\GetApidataController;
use App\Http\Controllers\UserIdApi;
use App\Http\Controllers\UserIdFeatchApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// post all data to the databse table apidata in ApiDataControlller
Route::post('/apidata', [ApidataController::class, 'apidata']);

// get api data thourgh the user_Id 

Route::get('/getdata', [GetApidataController::class,'getdata']);

// Routes for Id Fetch in database 
Route::get('/userid{rfid}', [UserIdApi::class,'userid']);

