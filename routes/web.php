<?php

use App\Http\Controllers\Blog;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MyUser;
use App\Http\Controllers\Profile;
use App\Http\Controllers\UserSession;
use App\Models\BlogModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::post('/',[Blog::class,'postBlog'])->middleware(['auth'])->name('postBlog');

Route::get('/', [Blog::class,'index'])->middleware(['auth'])->name('index');

Route::get('/proje', function() {
    return view('proje');
});

Route::get('/sil/{id}', [Blog::class,'sil']);
Route::get('/ban/{id}', [Blog::class,'ban']);


Route::get('/{username}', [Profile::class,'index'])->middleware(['auth'])->name('index');