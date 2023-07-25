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

Route::get('/', function () {return view('welcome');});

Route::get('/login', function () {return view('authentication.login');});
Route::get('/register', function () {return view('authentication.register');});
Route::get('/forgetpassword', function () {return view('authentication.forgetpassword');});
Route::get('/dashboard', function () {return view('general.dashboard',
    [
        'username' => 'Danial Farros'
    ]);});



Route::get('/test', function () {
    return view('test');
});
