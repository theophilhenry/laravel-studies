<?php

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
/*
Route::get('/helloworld', function () {
    return 'Hello World, Pak Dosen';
});

Route::view('/selamatdatang', 'welcome');

Route::get('/mahasiswa/{nama?}', function ($nama = "Default") {
    echo "Hello $nama";
})->name('showMahasiswa');

Route::get('/greetings/{nama}', function ($nama) {
    return view('welcome', ['nama'=>$nama]);
})->name('showGreetings');
*/

Route::get('/menu', function(){
    return view('menu');
});

Route::get('/menu/{category}/{product}', function($category, $product){
    return view('detail', ['category'=>$category, 'product'=>$product]);
});