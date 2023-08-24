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
});

Route::get('/detail',function (){
    return view('chat.detail');
});

Route::get('dashboard',function (){
    return view('chat.dashboard');
})->name('dashboard');


Route::group(['prefix'=>'chat','as'=>'chat.'],function(){

    Route::get('detail',function (){
        return view('chat.detail');
    })->name('detail');
    Route::get('message',[MessageController::class,'getMessage']);
    Route::post('send',[MessageController::class,'sendMessage']);
});
