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

Route::resource('/product', 'ProductController');
Route::resource('/supplier', 'SupplierController');
Route::resource('/category', 'CategoryController');
Route::resource('/transaction', 'TransactionController');

Route::get('/report/showcake/{category:category_name}', 'CategoryController@showCake')->name('reportShowCake');
Route::get('/report/totalproductpercategory', "CategoryController@totalproductpercategory")->name('reportTotalProductPerCategory');
Route::get('/report/totalproductpersupplier', "SupplierController@totalproductpersupplier")->name('reportTotalProductPerSupplier');

Route::post('transaction/showshowAjax', 'TransactionController@showAjax')->name('transaction.showAjax');
Route::post('supplier/showshowAjax', 'SupplierController@showAjax')->name('supplier.showAjax');

