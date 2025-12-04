<?php

use App\Http\Controllers\AuthController;
use App\Http\Middleware\Ceklogin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [AuthController::class, 'auth'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/layout', function () {
    return view('layout');
})->middleware(Ceklogin::class);

Route::get('/new', function () {
    return view('newLayout', ["title" => "New Layout"]);
})->middleware(Ceklogin::class);;

Route::get('/home', function () {
    return view('home', ["title" => "Home"]);
})->name('home');

Route::get('/next', function () {
    return view('nextpage', ["title" => "Next Page"]);
})->middleware(Ceklogin::class);;

Route::get('/register', function () {
    return view('register');
});
Route::post('/storeAccount', [UserController::class, 'storeAccount'])->name('storeAccount');
