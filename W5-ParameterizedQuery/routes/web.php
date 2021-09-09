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

// Route::get('/menu', function(){
//     return view('menu');
// });

// Route::get('/menu/{category}/{product}', function($category, $product){
//     return view('detail', ['category'=>$category, 'product'=>$product]);
// });

Route::resource('/product', 'ProductController');
Route::resource('/supplier', 'SupplierController');
Route::resource('/category', 'CategoryController');

Route::get('/report/showcake/{category_name}', 'CategoryController@showCake')->name('reportShowCake');
Route::get('/report/categoryminprice', 'CategoryController@categoryMinPrice');