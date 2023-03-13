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

Route::get('/products',[ProductController::class,'index']);
Route::get('/products/create',[ProductController::class,'create']);
Route::post('/products/create',[ProductController::class,'store']);
Route::get('/products/view/{id}',[ProductController::class,'view']);
Route::put('/products/update/{id}',[ProductController::class,'update']);
Route::delete('/products/delete/{id}',[ProductController::class,'delete']);