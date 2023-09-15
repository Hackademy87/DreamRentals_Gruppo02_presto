<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RevisorController;

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

// ROTTE PUBBLICHE

Route::get('/', [ProductController::class, 'home'])->name('home');

Route::get('/product/show/{product}',[ProductController::class,'show'])->name('product.show');

Route::get('/product/byCategory/{category}', [ProductController::class, 'byCategory'])->name('product.bycategory');

Route::get('/product/categorie/{category}',[ProductController::class,'indexByCategory'])->name('product.categorie');

Route::get('/product/index',[ProductController::class,'index'])->name('product.index');

Route::get('/contact',[ContactController::class,'contact'])->name('contatti');

Route::post('/contatti/nuovo',[ContactController::class,'newContact'])->name('contatti.nuovo');



Route::get('ricerca/annuncio',[ProductController::class,'searchProducts'])->name('products.search');



// ROTTE PROTETTE
Route::middleware(['auth'])->group(function () {

    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');


});
Route::middleware(['is.revisor'])->group(function () {
    Route::get('/revisor/index',[RevisorController::class,'index'])->name('revisor.index');

    Route::patch('/accetta/annuncio/{product}',[RevisorController::class,'acceptProduct'])->name('revisor.accept_product');

    Route::patch('/rifiuta/annuncio/{product}',[RevisorController::class,'rejectProduct'])->name('revisor.reject_product');

});
// ROTTE AMMINISTRAZIONEs
Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');
