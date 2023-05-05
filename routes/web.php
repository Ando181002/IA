<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mon_Controlleur;

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

Route::get('/', function () {
    return view('accueil');
});

Route::GET('formAjoutArticle', [Mon_Controlleur::class, 'formAddArticle']);
Route::GET('ajoutArticle', [Mon_Controlleur::class, 'AddArticle']);
Route::GET('listeArticle', [Mon_Controlleur::class, 'ListeArticle']);
Route::GET('ficheArticle', [Mon_Controlleur::class, 'ficheArticle']);
