<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminTinController;
use App\Http\Controllers\AuthenController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TinController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsMember;
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

Route::get('/', [TinController::class, 'tin'])->name('tin');
Route::get('/tin/{id}', [TinController::class, 'chitiet'])->name('chitiet');
Route::get('/cat/{idLT}', [TinController::class, 'tintrongloai'])->name('tintrongloai');
Route::get('/search', [TinController::class, 'search'])->name('search');

Route::get('/adminTin', [AdminTinController::class, 'adminTin'])->name('adminTin');
Route::get('/table', [AdminTinController::class, 'table'])->name('table');




Route::get('/create', [AdminTinController::class, 'create'])->name('tin.create');
Route::post('/tin', [AdminTinController::class, 'store'])->name('tin.store');





Route::get('login', [AuthenController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthenController::class, 'handleLogin']);

Route::get('register', [AuthenController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthenController::class, 'handleRegister']);

Route::post('logout', [AuthenController::class, 'logout'])->name('logout');


Route::get('member', [MemberController::class, 'dashboard'])
    ->name('member.dashboard')
    ->middleware(['auth', IsMember::class]);

Route::get('admin', [AdminController::class, 'dashboard'])
    ->name('admin.dashboard')
    ->middleware(['auth', IsAdmin::class]);
