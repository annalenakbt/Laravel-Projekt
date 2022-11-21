<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EinkauflisteController;
use App\Http\Controllers\UserController;

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
Route::get('/create', [EinkauflisteController::class, 'create'])->middleware('auth');
Route::post('/upload', [EinkauflisteController::class, 'upload'])->middleware('auth');
Route::get('/{id}/edit', [EinkauflisteController::class, 'edit'])->middleware('auth');
Route::patch('/update', [EinkauflisteController::class, 'update'])->middleware('auth');
Route::get('/{id}/completed', [EinkauflisteController::class, 'completed'])->middleware('auth');
Route::get('/{id}/delete', [EinkauflisteController::class, 'delete'])->middleware('auth');
Route::get('/register', [UserController::class, 'register'])->middleware('guest');
Route::post('/users', [UserController::class, 'user']);
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);