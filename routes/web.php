<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog;

Route::post('/',[Blog::class,'postBlog'])->name('postBlog');

Route::get('/', [Blog::class,'index'])->name('index');

Route::get('/proje', function() {
    return view('proje');
});

Route::get('/sil/{id}', [Blog::class,'sil']);