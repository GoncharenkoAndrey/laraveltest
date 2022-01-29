<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
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
Route::post("/contact", [IndexController::class, "contact"]);
Route::get("/success", [IndexController::class, "success"]);
Route::get("/login", [UserController::class, "loginForm"]);
Route::get("/logout", [UserController::class, "logout"]);
Route::get("/register", [UserController::class, "registerForm"]);
Route::post("/login", [UserController::class, "login"]);
Route::post("/register", [UserController::class, "register"]);
Route::get("/messages", [IndexController::class, "messagesList"])->middleware("auth");
Route::get("/messages/{id}", [IndexController::class, "messageView"]);
