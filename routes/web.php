<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/users', 'App\Http\Controllers\UserController@users')->name('users.users');