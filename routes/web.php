<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home', [
        'pageTitle' => 'Home',
        'metaTitle' => 'Home Gamehub'
    ]);
});

Route::get('/register', function(){
    return view('register', [
        'pageTitle' => 'Register',
        'metaTitle' => 'Register Gamehub'
    ]);
});

Route::get('/login', function(){
    return view('login',  [
        'pageTitle' => 'Login',
        'metaTitle' => 'Login Gamehub'
    ]);
});