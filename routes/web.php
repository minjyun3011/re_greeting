<?php

use App\Http\Controllers\CommentsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/comments/random', [CommentsController::class, 'random']);
Route::get('/comments/{words}', [CommentsController::class, 'greetings']);
Route::get('/comments/freeword/{words}', [CommentsController::class, 'freewords']);
