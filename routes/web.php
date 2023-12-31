<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController; 

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

Route::get('tweets', [TweetController::class, 'index'])->name('feed'); 

Route::get('tweets/create', [TweetController::class, 'create'])->name('tweets.create');

Route::get('tweets/{id}', [TweetController::class, 'show']); 

Route::post('tweets/store', [TweetController::class, 'store'])->name('tweets.store');

Route::delete('tweets/{id}', [TweetController::class, 'destroy'])->name('tweets.destroy');

Route::get('tweets/editTweet/{id}', [TweetController::class, 'editTweet'])->name('tweets.editTweet');

Route::post('tweets/updateTweet/{id}', [TweetController::class, 'updateTweet'])->name('tweets.updateTweet');




