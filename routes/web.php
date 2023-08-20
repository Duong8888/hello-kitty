<?php

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

Route::get('/dashboard', function () {
    return view('chat.detail');
})->name('dashboard');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
})->name('user');
