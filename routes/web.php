<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaticContentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StaticContentController::class, 'index'])->name('home');
Route::get('/profile', [StaticContentController::class, 'profile'])->name('profile');
Route::get('/dashboard', [StaticContentController::class, 'dashboard'])->name('dashboard');

/*
 * The routes about tasks
 */
Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/{slug}', [PostController::class, 'show'])->name('posts.show');

/*
 * Route that shows the about page. This handler just returns the about view.
 */
Route::get('posts/{slug}/edit', [PostController::class, 'edit'])->name('posts.edit');

Route::put('/posts/{slug}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{slug}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('faqs', [FaqController::class, 'index'])->name('faqs.index');
Route::get('faqs/create', [FaqController::class, 'create'])->name('faqs.create');
Route::post('faqs', [FaqController::class, 'store'])->name('faqs.store');

/*
 * Route that shows the about page. This handler just returns the about view.
 */
Route::get('faqs/{faq}/edit', [FaqController::class, 'edit'])->name('faqs.edit');
Route::put('faqs/{faq}', [FaqController::class, 'update'])->name('faqs.update');
Route::delete('/faqs/{faq}', [FaqController::class, 'destroy'])->name('faqs.destroy');
