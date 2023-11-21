<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentaireController;

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
Route::patch('/articleModif/{id}', [ArticleController::class, 'update']);//permet de renvoyer le formulaire avec patch
Route::get('/modifier/{id}', [ArticleController::class, 'edit']);//permet de renvoyer la vue qui permet de modifier article
Route::delete('/articleSupprimer/{id}', [ArticleController::class, 'destroy']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/commentaire', [CommentaireController::class, 'index']);

Route::post('/commentaires/{id}', [CommentaireController::class, 'store']);
Route::get('/commentaire', [CommentaireController::class, 'show']);

Route::get('/commentaire/{id}/modifier', [CommentaireController::class, 'edit'])->name('commentaire.modifier');
Route::put('/commentaire/{id}', [CommentaireController::class, 'update'])->name('commentaire.update');



Route::delete('/commentaires/{id}', [CommentaireController::class, 'destroy']);




