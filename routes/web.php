<?php

use App\Http\Controllers\UserController;
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
    return to_route('user.index');
})->name('home');


Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::get('/user/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');

