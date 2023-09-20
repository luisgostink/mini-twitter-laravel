<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('tweets', function () {
    return view('tweets.index');
});

Route::get('tweets/create', function () {
    return view('tweets.create');
});

Route::get('tweets/show', function () {
    return view('tweets.show');
});