<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComicController;// importiamo il controller
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
    return view('/layouts/layout');
});

Route::get('/comics', function () {
    return view('comics');
});
Route::resource('comics', ComicController::class);   //reindirizza automaticamente a tutte le rotte della CRUD, crea 7 rotte


