<?php

use App\Http\Controllers\AshishController;
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

Route::get('/', [AshishController::class, 'index'])->name('home');
Route::get('/about', [AshishController::class, 'about'])->name('about');
Route::get('/contact', [AshishController::class, 'contact'])->name('contact');
Route::post('/form', [AshishController::class, 'formSubmit'])->name('form.submit');
Route::get('/products/{id', [AshishController::class, 'product'])->name('products');
