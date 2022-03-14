<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntrepriseController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/listEntreprise', [EntrepriseController::class, 'index']);
Route::get('/entreprise.list', [EntrepriseController::class, 'index'])->name('entreprise.list');
Route::get('/formAddEntreprise', [EntrepriseController::class, 'formAdd']);
Route::get('/deleteEntreprise/{id}', [EntrepriseController::class, 'delete']);
Route::get('/editEntreprise/{id}', [EntrepriseController::class, 'edit']);
Route::post('/addEntreprise', [EntrepriseController::class, 'save']);