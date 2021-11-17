<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::view('/', 'dashboard');
Route::view('/home', 'home')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::resource('/suppliers', 'SupplierController');
    Route::post('suppliers/showshowAjax', 'SupplierController@showAjax')->name('suppliers.showAjax');
    Route::post('suppliers/getModalEdit', 'SupplierController@getModalEdit')->name('suppliers.getModalEdit');
    Route::post('suppliers/getModalEditNoReload', 'SupplierController@getModalEditNoReload')->name('suppliers.getModalEditNoReload');
    Route::post('suppliers/updateSupplierNoReload', 'SupplierController@updateSupplierNoReload')->name('suppliers.updateSupplierNoReload');
    Route::post('suppliers/deleteSupplierNoReload', 'SupplierController@deleteSupplierNoReload')->name('suppliers.deleteSupplierNoReload');
});

Route::resource('/categories', 'CategoryController');
Route::resource('/transactions', 'TransactionController');

Route::get('/reports/showcake/{category:category_name}', 'CategoryController@showCake')->name('reports.showCake');
Route::get('/reports/totalproductpercategory', "CategoryController@totalproductpercategory")->name('reports.totalProductPerCategory');

Route::post('transactions/showshowAjax', 'TransactionController@showAjax')->name('transactions.showAjax');

Route::resource('/products', 'ProductController');
Route::post('products/getModalEdit', 'ProductController@getModalEdit')->name('products.getModalEdit');
Route::post('products/getModalEditNoReload', 'ProductController@getModalEditNoReload')->name('products.getModalEditNoReload');
Route::post('products/updateProductNoReload', 'ProductController@updateProductNoReload')->name('products.updateProductNoReload');
Route::post('products/deleteProductNoReload', 'ProductController@deleteProductNoReload')->name('products.deleteProductNoReload');
