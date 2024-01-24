<?php

use App\Http\Controllers\profileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\RfiduserController;
use App\Http\Controllers\LoginpageController;



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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




// routes for home page 
Route::get("/", [RfiduserController::class,'homepage'])->name('home');


// for registration page Routes
Route::get('/index', [RfiduserController::class, 'index'])->name('index');
Route::post('/register', [RfiduserController::class,'register'])->name('register');



// Login page Routes
Route::get('/login', [LoginpageController::class,'login'])->name('login');
Route::post('/login', [LoginpageController::class,'loginAuth']);

// for profile page Routes 

Route::get('/profile', [profileController::class, 'userdata']);



// for Logout 
Route::match(['get', 'post'], '/logout', [profileController::class, 'logout'])->name('logout');



// Route::match(['get', 'post'], '/ProfileInfo', [profileController::class, 'profileInfo'])->name('profileInfo');
Route::get('profileinfo', [profileController::class,'profileInfo'])->name('profileInfo');
// Route
Route::post('/updateprofile', [profileController::class,'profileUpdate'])->name('updateprofile');





