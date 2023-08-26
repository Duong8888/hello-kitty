<?php

use App\Events\NewMessageEvent;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
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
})->name('home');

Route::group(['prefix' => 'chat', 'as' => 'chat.'], function () {
    Route::get('/',[MessageController::class,'showDetail'])->name('detail');
    Route::post('message', [MessageController::class, 'getMessage'])->name('getMessage');
    Route::post('send', [MessageController::class, 'sendMessage']);
});
