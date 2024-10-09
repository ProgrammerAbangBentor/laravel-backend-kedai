<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard', ['type_menu' => 'dashboard']);
});

// Route::get('/login', function () {
//     return view('auth.auth-login', ['type_menu' => 'auth']);
// });
