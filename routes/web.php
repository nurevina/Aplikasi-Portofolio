<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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


// Route::get('/admin', function() {
//     return view('admin');
// });

Route::get('/admin', [AdminController::class, 'index']);

Route::post('/admin/store', [AdminController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login-admin');

Route::get('/', [HomeController::class, 'index']);

Route::get('/product', [AdminController::class, 'data_product']);

Route::get('/admin/destroy/{id}', [AdminController::class, 'destroy']);





// Route::get('/admin', 'App\Http\Controllers\AdminController@index');

// Route::post('/admin/store', 'App\Http\Controllers\AdminController@store');

// Route::get('/', 'App\Http\Controllers\HomeController@index');

// Route::get('/product', 'App\Http\Controllers\AdminController@data_product');

// Route::get('/admin/destroy/{id}', 'App\Http\Controllers\AdminController@destroy');

