<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/articles', [ArticleController::class, 'index']);
Route::post('/article/articles', [ArticleController::class, 'store']);
Route::get('/article/listeArticle', [ArticleController::class, 'show']);
Route::get('/article/{id}', [ArticleController::class, 'voirDetails']);

