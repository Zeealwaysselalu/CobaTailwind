<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InfoUserController;


Route::middleware('auth')->group(function () {

    Route::get('/profile', function () {
        return view('user.profile', ["dataprofil" => auth('web')->user()->infoUser]);
    })->name('profile');

    Route::get('/home', function () {
        return view('user.home', ["title" => "Home"]);
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

    Route::post('/deleteaccount', [InfoUserController::class, 'deleteAccount'])->name('deleteaccount');

    Route::get('/edit', function () {
        return view('user.edit-profile', [
            "title" => "Edit Profile",
            "dataprofil" => auth('web')->user()->infoUser
        ]);
    })->name('edit.profile');
    Route::post('/profile/update', [InfoUserController::class, 'edit'])->name('profile.update');
});

Route::middleware('guest')->group(function () {

    Route::get('/login', function () {
        return view('user.login');
    })->name('login');

    Route::post('/login', [AuthController::class, 'auth'])->name('login');

    Route::get('/register', function () {
        return view('user.register');
    })->name('register');

    Route::post('/storeAccount', [UserController::class, 'storeAccount'])->name('storeAccount');
});

Route::get('/', function () {
        return view('index');
    })->name('index');
