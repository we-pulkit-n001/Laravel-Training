<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\RelationTestController;


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

Route::get('/subscribe', [SubscribeController::class, 'subscribed']);

Route::get('/user', [UserController::class, 'show']);
Route::get('/delete-user', [UserController::class, 'delete']);

Route::get('/show-post', [PostController::class, 'show']);

Route::get('/home', [HomeController::class, 'index']);

Route::post('/home', [HomeController::class, 'registeredUser']);

Route::get('/google', [HomeController::class, 'googleSearch']);

Route::get('/set-cookie', [HomeController::class, 'setCookie']);

Route::get('/get-cookie', [HomeController::class, 'getCookie']);

Route::get('/delete-cookie', [HomeController::class, 'deleteCookie']);

Route::get('/set-session', [HomeController::class, 'setSession']);
Route::get('/get-session', [HomeController::class, 'getSession']);
Route::get('/delete-session', [HomeController::class, 'deleteSession']);

Route::get('/relation', [MemberController::class, 'index']);

Route::get('/collection', [CollectionController::class, 'index']);


Route::get('/send-test-email', function () {

    Mail::raw('This is a test email', function ($message) {
        $message->to('test@example.com')
            ->subject('Test Email');
    });

    return 'Test email sent!';
});
