<?php

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function() {
    Route::get('/inicio', function() {
        return "Hola mundo";
    })->name('home');
});

// Route::group('api', function() {
//     Route::get('/inicio', function() {
//         return "Hola mundo";
//     })->name('home');
// });

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user/{id}', [UserController::class, 'show']);
