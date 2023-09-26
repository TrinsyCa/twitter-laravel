<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog;

Route::get('/post', function () {
    return view('welcome');
});

Route::post('/blogs',[Blog::class,'postBlog'])->name('postBlog');

Route::get('/blogs', [Blog::class,'index'])->name('index');

Route::get('/proje', function() {
    return view('proje');
});