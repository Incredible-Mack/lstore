<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::group(['prefix'=> 'admin'], function () {
    Route::get('/dashboard', function () { return view('admin.dashboard'); })->name('dashboard');
    Route::get('product', [ProductsController::class,'index'])->name('product');
    Route::get('/addproduct', function () { return view('admin.addproduct'); })->name('addproduct');
   
    Route::get('editproduct/{product_id}', [ProductsController::class,'edit'])->name('editproduct');
    Route::post('store', [ProductsController::class, 'store'])->name('store');

    
});

Route::get('/product', function () {
    return view('product');
})->name('product');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
