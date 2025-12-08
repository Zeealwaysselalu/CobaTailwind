<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InfoUserController;


Route::middleware('auth')->group(function () {

    Route::get('/profile', function () {
        return view('profile', [
            "dataprofil" => auth()->user()->infoUser
        ]);
    })->name('profile');

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

    Route::get('/edit', function () {
        return view('edit-profile', [
            "title" => "Edit Profile",
            "dataprofil" => auth()->user()->infoUser
        ]);
    })->name('edit.profile');
    Route::post('/profile/update', [InfoUserController::class, 'edit'])->name('profile.update');
});

Route::middleware('guest')->group(function () {

    Route::get('/login', function () {
        return view('login');
    })->middleware('guest')->name('login');

    Route::post('/login', [AuthController::class, 'auth'])->name('login');

    Route::get('/register', function () {
        return view('register');
    });

    Route::get('/', function () {
        return view('index');
    })->name('index');

    Route::post('/storeAccount', [UserController::class, 'storeAccount'])->name('storeAccount');
});
