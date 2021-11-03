<?php

use App\Http\Controllers\ProductController;
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

Route::resource('/products', 'ProductController');
Route::resource('/suppliers', 'SupplierController');
Route::resource('/categories', 'CategoryController');
Route::resource('/transactions', 'TransactionController');

Route::get('/reports/showcake/{category:category_name}', 'CategoryController@showCake')->name('reports.showCake');
Route::get('/reports/totalproductpercategory', "CategoryController@totalproductpercategory")->name('reports.totalProductPerCategory');

Route::post('transactions/showshowAjax', 'TransactionController@showAjax')->name('transactions.showAjax');
Route::post('suppliers/showshowAjax', 'SupplierController@showAjax')->name('suppliers.showAjax');

