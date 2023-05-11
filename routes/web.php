<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegitserController;
use App\Http\Controllers\BookController;

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

Route::get ('/',[AuthController::class, 'welcome'])->name('welcome');
Route::post('/message', [MessageController::class,'storeMessage'])->name('storeMessage');

Route::get('/register',[RegitserController::class, 'register'])->name('register');
Route::post('/register/input',[RegitserController::class, 'registeracount'])->name('registerAcount');


Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login/input',[AuthController::class, 'auth'])->name('login.auth');
Route::post('/logout',[AuthController::class, 'logout'])->name('logout');
Route::get('/main', [AuthController::class, 'main'])->name('main');

/*----dashbord--*/
Route::get('/dashboard', [PersController::class, 'dashboard'])->middleware('admin');
Route::get('/user', [AdminController::class, 'indexUser'])->name('user')->middleware(['admin','auth']);
Route::get('/rents_logs', [PersController::class, 'rentlogs'])->name('rentlog')->middleware(['admin','auth']);


//crud//
Route::post('/deleteUser/{id}', [AdminController::class,'deleteUser'])->name('deleteUser');
Route::get('/edit/{id}',[AdminController::class, 'editUser'])->name('editUser')->middleware(['admin','auth']);
Route::post('/update/{id}',[AdminController::class, 'update'])->name('update');


//crud book//
Route::get('/book', [BookController::class, 'book'])->name('book')->middleware(['admin', 'auth']);
Route::post('/book/input',[BookController::class, 'bookCreate'])->name('bookCreate');
Route::get('/category', [BookController::class, 'category'])->middleware(['admin','auth']);

//dashboard user//
Route::get('/dashboard/User',[PersController::class, 'dashUser'])->name('dashUser');