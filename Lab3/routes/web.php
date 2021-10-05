<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//product routes

Route::get('/', [productController::class, 'home'])->name('home');
Route::get('/create', [productController::class, 'create'])->name('product.create');
Route::post('/create', [productController::class, 'createSubmit'])->name('product.create');
Route::get('/products', [productController::class, 'lists'])->name('product.list');
Route::get('/product/update/{id}', [productController::class, 'update']);
Route::post('/product/update', [productController::class, 'updateSubmit'])->name('product.update');
Route::get('/product/delete/{id}', [productController::class, 'delete']);