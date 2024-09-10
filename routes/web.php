<?php

use App\Http\Controllers\CollectionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RelationTestController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [UserController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::post('/home', [HomeController::class, 'registeredUser']);

Route::get('/google', [HomeController::class, 'googleSearch']);

Route::get('/set-cookie', [HomeController::class, 'setCookie']);

Route::get('/get-cookie', [HomeController::class, 'getCookie']);

Route::get('/delete-cookie', [HomeController::class, 'deleteCookie']);

Route::get('/set-session', [HomeController::class, 'setSession']);
Route::get('/get-session', [HomeController::class, 'getSession']);
Route::get('/delete-session', [HomeController::class, 'deleteSession']);

route::get('/relation', [MemberController::class, 'index']);

route::get('/collection', [CollectionController::class, 'index']);
