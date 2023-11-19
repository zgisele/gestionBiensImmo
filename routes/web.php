<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard']);
    Route::get('/profil', [UserController::class, 'profil']);
    Route::get('/user', [UserController::class, 'user']);
    Route::get('/articles', [UserController::class, 'articles']);
    Route::get('/commentaires', [UserController::class, 'commentaires']);
    Route::get('/articles/ajouter', [UserController::class, 'ajouter']);
    Route::delete('deleteUser/{id}', [UserController::class, 'deleteUser']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/user/profile', [UserController::class, 'profilUser']);
    Route::patch('/user/updateProfile/{id}', [UserController::class, 'updateProfile']);
    Route::patch('/user/updatePasswd/{id}', [UserController::class, 'updatePasswd']);
    Route::delete('/user/deleteUser/{id}', [UserController::class, 'deleteUser']);
});

Route::get('/', [UserController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// route pour l'authentication
Auth::routes();
