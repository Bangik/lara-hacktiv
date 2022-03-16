<?php

use App\Http\Controllers\UserController;
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

Route::resource('user', UserController::class);

// Route::get('/user', [UserController::class, 'index'])->name('user.index');
// Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
// Route::post('/user', [UserController::class, 'store'])->name('user.store');
// Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');
// Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
// Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
// Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');