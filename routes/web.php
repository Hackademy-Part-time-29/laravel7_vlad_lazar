<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homepage;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

Route::get('/',[Homepage::class,'showHomepage'])->name('homepage');
Route::get('/articoli',[ArticleController::class,'showArticles'])->name('articoli');
Route::get('/form-articolo',[ArticleController::class,'showArticleForm'])->middleware(['auth','verified'])->name('form-articolo');
Route::get('/seeder',[ArticleController::class, 'seeder']);
Route::get('/articolo/{id}',[ArticleController::class,'showArticle'])->name('articolo');
Route::post('articoli/utente',[ArticleController::class,'store'])->middleware(['auth','verified'])->name('articoli.store');
Route::get('/dashboard',[Homepage::class,'showDashboard'])->name('dashboard');

Route::resource('categories',CategoryController::class);

