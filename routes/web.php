<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourController;
use App\Http\Controllers\RapportController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\InscriptionController;

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
    return view('layout');
});

Route::resource('/etudiants',EtudiantController::class);
Route::get('/etudiants/delete/{etudiant}',[EtudiantController::class,'destroy'])->name('etudiants.delete');

Route::resource('/enseignants',EnseignantController::class);
Route::get('/enseignants/delete/{enseignant}',[EnseignantController::class,'destroy'])->name('enseignants.delete');

Route::resource('/cours',CourController::class);
Route::get('/cours/delete/{cour}',[CourController::class,'destroy'])->name('cours.delete');

Route::resource('/inscriptions',InscriptionController::class);
Route::get('/inscriptions/delete/{inscription}',[InscriptionController::class,'destroy'])->name('inscriptions.delete');

Route::resource('/paiements',PaiementController::class);
Route::get('/paiements/delete/{paiement}',[PaiementController::class,'destroy'])->name('paiements.delete');

Route::get('/rapport/{paiement}',[RapportController::class, 'imprimer'])->name('paiements.rapport');
