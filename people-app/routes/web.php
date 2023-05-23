<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniqueController;

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

Route::get('/ostrowski/50400/people', [UniqueController::class, 'index']);
Route::post('/ostrowski/50400/people', [UniqueController::class, 'create']);
Route::get('/ostrowski/50400/people/{id}', [UniqueController::class, 'show']);
Route::put('/ostrowski/50400/people/{id}', [UniqueController::class, 'update']);
Route::delete('/ostrowski/50400/people/{id}', [UniqueController::class, 'destroy']);
Route::get('/token', function () {
    return csrf_token();
});
