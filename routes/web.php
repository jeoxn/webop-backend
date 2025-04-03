<?php

use App\Http\Controllers\AdminController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // fetch 3 latest articles
    $articles = Article::orderBy('created_at', 'desc')
        ->take(3)
        ->get();
    return view('index', ['articles' => $articles]);
});

Route::get('/login', [AdminController::class, 'login'])
    ->name('login');

Route::post('/login', [AdminController::class, 'authenticate'])
    ->name('login.post');

Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');

Route::get('/admin/post', [AdminController::class, 'create'])->middleware('auth');

Route::post('/admin/post', [AdminController::class, 'save'])->middleware('auth');

Route::get('/admin/delete/{id}', [AdminController::class, 'remove'])->middleware('auth');

Route::get('/article/{slug}', function ($slug) {
    $article = Article::where('slug', $slug)->firstOrFail();
    return view('article', ['article' => $article]);
});

Route::get('/logout', [AdminController::class, 'logout'])->name('logout');