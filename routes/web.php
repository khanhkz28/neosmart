<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PaginationController;

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

Route::get('/', [ClientController::class, 'index'])->name('home');
Route::get('/lien-he', function () {
    return view('client.contant');
});

Route::get('/hoi-dap', function () {
    return view('client.faqs');
});
<<<<<<< HEAD
<<<<<<< HEAD

=======
Route::get('/pagination', [PaginationController::class, 'index']);
Route::get('/pagination/fetch_data', [PaginationController::class, 'fetch_data']);
>>>>>>> afa029c6c9d9236eec8c7be97ebed27f6cbd4769
=======
Route::get('/pagination', [PaginationController::class, 'index']);
Route::get('/pagination/fetch_data', [PaginationController::class, 'fetch_data']);
>>>>>>> afa029c6c9d9236eec8c7be97ebed27f6cbd4769
Route::group(['prefix' => 'congtrinh'], function ($router) {
    Route::get('/', [BlogController::class, 'GetAll']);
    Route::get('/{id}', [BlogController::class, 'getbyid']);
});

Route::group(['prefix' => 'sanpham'], function ($router) {
    Route::get('/', [ProductController::class, 'GetAll']);
    Route::get('/{id}', [ProductController::class, 'GetById']);
});