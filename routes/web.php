<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\ContactController;


Route::get('/',[ContactController::class, 'home'])->name('welcome');
Route::get('/contact-us',[ContactController::class, 'contactView'])->name('contact-us');
Route::post('/contact-saved',[ContactController::class, 'contactSave'])->name('contact-saved');
Route::get('/genre',[AnimeController::class,'genre_index'])->name('genre.index');
Route::get('/animeByGenre/{id}',[AnimeController::class,'animeByGenre'])->name('genre.anime');
Route::get('/anime/{id}',[AnimeController::class,'show'])->name('anime.show');
Route::get('/animeBySearch',[AnimeController::class,'animeBySearch'])->name('anime.search');