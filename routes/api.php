<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Get all products
Route::get('products', [ProductController::class, 'getProducts']);

//Get a specific product with id
Route::get('product/{id}', [ProductController::class, 'getProductById']);

//Insert a new product
Route::post('addProduct', [ProductController::class, 'addProduct']);

//Update one product
Route::put('updateProduct/{id}', [ProductController::class, 'updateProduct']);

//Delete one product
Route::delete('deleteProduct/{id}', [ProductController::class, 'deleteProduct']);