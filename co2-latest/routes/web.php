<?php

use Illuminate\Support\Facades\Route;

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

// The route we have created to show all blog posts.
// Route::get('/route', [\location::class, 'index']);
Route::get('/bedrijven/create', [\App\Http\Controllers\bedrijvenController::class, 'create']); //saves the created post to the databse
Route::post('/bedrijven/create', [\App\Http\Controllers\bedrijvenController::class, 'store']); //saves the created post to the databse

Route::get('/bedrijven', [\App\Http\Controllers\bedrijvenController::class, 'index']);
Route::get('/bedrijven/{bedrijven}', [\App\Http\Controllers\bedrijvenController::class, 'show']);

Route::get('/{bedrijven}/edit', [\App\Http\Controllers\bedrijvenController::class, 'edit']); //commits edited post to the database 
Route::put('/{bedrijven}/edit', [\App\Http\Controllers\bedrijvenController::class, 'update']); //commits edited post to the database 
Route::get('/bedrijven/{bedrijven}/edit', [\App\Http\Controllers\bedrijvenController::class, 'edit']); //commits edited post to the database 
Route::put('/bedrijven/{bedrijven}/edit', [\App\Http\Controllers\bedrijvenController::class, 'update']); //commits edited post to the database 
Route::delete('/bedrijven/{bedrijven}', [\App\Http\Controllers\bedrijvenController::class, 'destroy']); //deletes post from the database
