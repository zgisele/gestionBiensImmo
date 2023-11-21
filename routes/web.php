<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/commentaire', [CommentaireController::class, 'index']);

Route::post('/commentaires/{id}', [CommentaireController::class, 'store']);
Route::get('/commentaire', [CommentaireController::class, 'show']);

Route::get('/commentaire/{id}/modifier', [CommentaireController::class, 'edit'])->name('commentaire.modifier');
Route::put('/commentaire/{id}', [CommentaireController::class, 'update'])->name('commentaire.update');



Route::delete('/commentaires/{id}', [CommentaireController::class, 'destroy']);


// <!-- <div>
//         <strong>{{$commentaire->user->name}}</strong>-
//         {{$commentaire->created_at->diffForHumans()}}
//     </div> -->



// <!-- Lien pour la modification du commentaire -->
// <a href="{{ route('commentaires.edit', ['commentaire' => $commentaire->id]) }}">Modifier le commentaire</a>

//  <!-- Lien pour la suppression du commentaire -->
// <a href="{{ route('commentaires.destroy', ['commentaire' => $commentaire->id]) }}" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $commentaire->id }}').submit();">
//    Supprimer le commentaire
// </a>
// <form id="delete-form-{{ $commentaire->id }}" action="{{ route('commentaires.destroy', ['commentaire' => $commentaire->id]) }}" method="post" style="display: none;">
//    @csrf
//    @method('delete')
// </form>

