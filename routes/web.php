<?php

use App\Http\Controllers\TinController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

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


Route::get('/tin/{id}', [TinController::class, 'chitiet'])->name('chitiet');
Route::get('/', [TinController::class, 'tin']);
Route::get('/cat/{idLT}', [TinController::class, 'tintrongloai'])->name('tintrongloai');
Route::get('/search', [TinController::class, 'search'])->name('search');
