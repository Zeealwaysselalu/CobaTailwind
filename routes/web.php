<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware('auth')->group(function(){

    Route::get('/profile', function () {
    return view('profile');
    });

    Route::get('/home', function () {
        return view('home', ["title" => "Home"]);
    })->name('home');

    Route::get('/layout', function () {
        return view('layout');
    });

    Route::get('/new', function () {
        return view('newLayout', ["title" => "New Layout"]);
    });

    Route::get('/next', function () {
        return view('nextpage', ["title" => "Next Page"]);
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function(){

    Route::get('/login', function () {
        return view('login');
    })->middleware('guest')->name('login');

    Route::post('/login', [AuthController::class, 'auth'])->middleware('guest')->name('login');

    Route::get('/register', function () {
        return view('register');
    });

    Route::get('/', function () {
        return view('index');
    })->name('index');

    Route::post('/storeAccount', [UserController::class, 'storeAccount'])->name('storeAccount');
});





