<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
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

// ROTTE PUBBLICHE

Route::get('/', [ProductController::class, 'home'])->name('home');

Route::get('/product/show/{product}',[ProductController::class,'show'])->name('product.show');

Route::get('/product/byCategory/{category}', [ProductController::class, 'byCategory'])->name('product.bycategory');

Route::get('/product/categorie/{category}',[ProductController::class,'indexByCategory'])->name('product.categorie');



// ROTTE PROTETTE
Route::middleware(['auth'])->group(function () {
    
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    
});


// ROTTE AMMINISTRAZIONEs
Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');