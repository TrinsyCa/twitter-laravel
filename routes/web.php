<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Blog;
use App\Http\Controllers\Users;
use App\Http\Controllers\Auth\LoginController;

Route::post('/',[Blog::class,'postBlog'])->name('postBlog');

Route::get('/', [Blog::class,'index'])->name('index');

Route::get('/proje', function() {
    return view('proje');
});

Route::get('/sil/{id}', [Blog::class,'sil']);


//Create Account Page
Route::get('/create', [Users::class,'create_page']);
Route::post('/create', [Users::class,'create_acc'])->name('create_acc');

//Login Page
Route::get('/login', [Users::class,'login_page']);
Route::post('/login', 'Auth\LoginController@login')->name('login');