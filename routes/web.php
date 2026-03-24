<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home', [
        'pageTitle' => 'Home',
        'metaTitle' => 'Home Gamehub'
    ]);
});

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', function(){
    return view('login',  [
        'pageTitle' => 'Login',
        'metaTitle' => 'Login Gamehub'
    ]);
});

Route::get('/posts', function(){
    //recupero i posts
    $posts = Post::all();

    //mostro i posts
    return view('posts.index', ['posts' => $posts]);

})->name('posts.index');

Route::get('/posts.create', function(){

});