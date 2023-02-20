<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

// listar todos os usuarios
Route::get('/', [RegisterController::class, 'index'])->name('register.index');

// listar apenas um usuario
Route::get('/show/{id}', [RegisterController::class, 'show'])->name('register.show');

Route::get('/registerUser', function(){
    return view('paginas/register');
})->name('registerUser');

// cadastrar usuario
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::put('/update/{id}', [RegisterController::class, 'update'])->name('register.update');

Route::delete('/destroy/{id}', [RegisterController::class, 'destroy'])->name('register.destroy');

