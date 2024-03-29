<?php

use App\Http\Controllers\usersController;
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
    // return view('login');
});
Route::post("registerUser",[usersController::class,'register']);
Route::view("register","registerUser");

Route::post("loginUser",[usersController::class,'login']);
Route::view("login","loginUser");


