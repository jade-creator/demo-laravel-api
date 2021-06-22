<?php

use App\Http\Livewire\Product;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/index', Product\IndexComponent::class)->name('product.index');
Route::get('/products/show', Product\ShowComponent::class)->name('product.show');
Route::get('/products/store', Product\StoreComponent::class)->name('product.store');
Route::get('/products/update', Product\UpdateComponent::class)->name('product.update');
Route::get('/products/destroy', Product\DestroyComponent::class)->name('product.destroy');
