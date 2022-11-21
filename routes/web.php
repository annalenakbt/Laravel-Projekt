<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EinkauflisteController;
use App\Http\Controller\UserController;

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
    return view('welcome');
});

Route::get('/index', [EinkauflisteController::class, 'index'])->name('einkaufliste.index');                     //Zugriff auf die verschiedenen Seiten
Route::get('/create', [EinkauflisteController::class, 'create']);
Route::post('/upload', [EinkauflisteController::class, 'upload']);
Route::get('/{id}/edit', [EinkauflisteController::class, 'edit']);
Route::patch('/update', [EinkauflisteController::class, 'update']);
Route::get('/{id}/completed', [EinkauflisteController::class, 'completed']);
Route::get('/{id}/delete', [EinkauflisteController::class, 'delete']);
Route::get('/register', [UserController::class, 'register']);

