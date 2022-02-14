<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'index'])->name('home');

Route::get('/about', [PagesController::class, 'about'])->name('about');

Route::get('/how-to-use', [PagesController::class, 'howTo'])->name('howTo');


Route::get('/view', [PagesController::class, 'view']);


Route::get('/{slug}', [PagesController::class, 'show']);

Route::get('/{slug}/edit', [PagesController::class, 'edit']);


Route::post('/store', [PagesController::class, 'store'])->name('post.store');

Route::patch('/{slug}/update', [PagesController::class, 'update'])->name('post.update');


Route::post('/check-slug', [PagesController::class, 'checkSlug'])->name('check-slug');