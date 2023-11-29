<?php

use App\Http\Controllers\AshishController;
use App\Http\Controllers\CkController;
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



// CRUD ROUTES

Route::get('/ck', [CkController::class, 'index'])->name('ck.index');
Route::get('/ck/create', [CkController::class, 'create'])->name('ck.create');
Route::post('/ck', [CkController::class, 'store'])->name('ck.store');
Route::get('/ck/{id}', [CkController::class, 'edit'])->name('ck.edit');
Route::post('/ck/{id}', [CkController::class, 'update'])->name('ck.update');
Route::post('/ck/{id}/delete', [CkController::class, 'destroy'])->name('ck.destroy');
