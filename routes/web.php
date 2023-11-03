<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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

Route::resource('products', ProductsController::class);
Route::get('/', [ProductsController::class,'index']);
Route::get('products/{id}', [ProductsController::class,'show'])->name('products.show');
Route::get('products/{id}/edit', [ProductsController::class,'edit'])->name('products.edit');
Route::get('products/create', [ProductsController::class,'create'])->name('products.create');
Route::post('products', [ProductsController::class,'store'])->name('products.store');
Route::put('products/{id}', [ProductsController::class,'update'])->name('products.update');
Route::delete('products/{id}', [ProductsController::class,'destroy'])->name('products.destroy');

