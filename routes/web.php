<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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
// Route::get('/', function(){
//     return view('index');
// });
Route::get('/', [App\Http\Controllers\MasterController::class, 'showIndex']);
Route::get('/menu', [App\Http\Controllers\MasterController::class, 'showMenu']);
Route::get('/menu/{id}/show', [App\Http\Controllers\MasterController::class, 'showMenuDetails'])->name('menu.show');
Route::get('/about', [App\Http\Controllers\MasterController::class, 'showAbout']);
Route::get('/contact', [App\Http\Controllers\MasterController::class, 'showContact']);


//Cart
Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::get('/add-to-cart/{item}', [App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart/destroy/{item}', [App\Http\Controllers\CartController::class, 'destroyItem'])->name('cart.destroy');
Route::get('/cart/update/{item}', [App\Http\Controllers\CartController::class, 'updateItem'])->name('cart.update');
Route::post('/cart/checkout', [App\Http\Controllers\CartController::class, 'showCheckout'])->name('cart.checkout');

//Order
Route::resource('orders', OrderController::class);



//Admin
Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/categories', [App\Http\Controllers\AdminController::class, 'showCategories'])->name('categories');
    Route::post('/category/create', [App\Http\Controllers\AdminController::class, 'createCategory'])->name('category.create');
    Route::delete('/category/{id}/destroy', [App\Http\Controllers\AdminController::class, 'destroyCategory'])->name('category.destroy');
    Route::get('/items', [App\Http\Controllers\AdminController::class, 'showItems'])->name('items');
    Route::post('/item/create', [App\Http\Controllers\AdminController::class, 'createItem'])->name('item.create');
    Route::patch('/item/{id}/update', [App\Http\Controllers\AdminController::class, 'updateItem'])->name('item.update');
    Route::delete('/item/{id}/destroy', [App\Http\Controllers\AdminController::class, 'destroyItem'])->name('item.create');
    Route::get('/item/getOldValues', [App\Http\Controllers\AdminController::class, 'getOldValues'])->name('item.old');
    Route::get('/orders', [App\Http\Controllers\AdminController::class, 'showOrders'])->name('orders');
    Route::get('/testimonials', [App\Http\Controllers\AdminController::class, 'showTestimonials'])->name('testimonials');
    Route::get('/summary', [App\Http\Controllers\AdminController::class, 'showSummary'])->name('summary');
});
Route::get('/contact', [App\Http\Controllers\MasterController::class, 'showContact']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
