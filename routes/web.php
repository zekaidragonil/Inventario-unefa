<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditController;
use App\Http\Controllers\adminController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/', [adminController::class, 'index'])->name('admin');
Route::post('', [adminController::class, 'store'])->name('store');
Route::get('/edit', [EditController::class, 'index'])->name('edit');
Route::put('update/{id}', [EditController::class, 'update'])->name('editar');
Route::get('delete/{id}', [EditController::class, 'delete'])->name('delete');
