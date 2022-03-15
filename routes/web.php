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
Route::get('/deleteEntreprise/{id}', [EntrepriseController::class, 'delete'])->name('entreprise.delete');
Route::get('/showEntreprise/{id}', [EntrepriseController::class, 'show'])->name('entreprise.show');
Route::get('/editEntreprise/{id}', [EntrepriseController::class, 'edit'])->name('entreprise.edit');
Route::post('/addEntreprise', [EntrepriseController::class, 'save']);
Route::put('/updateEntreprise/{id}', [EntrepriseController::class, 'update']);
