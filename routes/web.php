<?php

use App\Http\Controllers\ApprenantController;

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
    // return view('welcome');
// });

Route::get('/apprenants', [ApprenantController::class, 'index']);
Route::get('/apprenants/create', [ApprenantController::class, 'create']);
Route::post('/apprenants', [ApprenantController::class, 'store']);