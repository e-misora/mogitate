<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products',[ProductController::class,'index']);
Route::post('/products/register',[ProductController::class,'store']);
Route::get('/products/register',[ProductController::class,'store']);
Route::post('/products/detail',[ProductController::class,'detail']);

Route::get('/products/detail',[ProductController::class,'detail']);



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
