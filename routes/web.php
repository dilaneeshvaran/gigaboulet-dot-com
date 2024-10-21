<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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


Route::get('/', [ClientController::class, 'acceuil']);
Route::get('/blog', [ClientController::class, 'blog']);
Route::get('/contact', [ClientController::class, 'contact']);
Route::get('/about', [ClientController::class, 'about']);
