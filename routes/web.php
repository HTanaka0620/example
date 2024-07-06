<?php

use Illuminate\Support\Facades\Route;

Route::get('/list',[App\Http\Controllers\ArticleController::class,'showList'])->name('list');
Route::get('/regist',[App\Http\Controllers\ArticleController::class,'showRegistForm'])->name('regist');
Route::post('/regist',[App\Http\Controllers\ArticleController::class,'registSubmit'])->name('submit');
