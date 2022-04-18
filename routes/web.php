<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;

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

Route::get('/', [ClientController::class, 'index']);
Route::get('/lien-he', function () {
    return view('client.contant');
});
Route::get('/hoi-dap', function () {
    return view('client.faqs');
});
Route::group(['prefix' => 'congtrinh'], function ($router) {
    Route::get('/', [BlogController::class, 'GetAll']);
    Route::get('/{id}', [BlogController::class, 'getbyid']);
});
Route::group(['prefix' => 'sanpham'], function ($router) {
    Route::get('/', [ProductController::class, 'GetAll']);
    Route::get('/{id}', [ProductController::class, 'GetById']);
});