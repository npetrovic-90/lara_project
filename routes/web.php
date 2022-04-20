<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

Route::get('/',[PagesController::class,'index']);
Route::get('/about',[PagesController::class,'about']);


//laravel 8 new
//Route::get('/products',[ProductsController::class,'index'])->name('products');
//Route::get('/products/about',[ProductsController::class,'about']);

//pattern is an integer
//Route::get('/products/{id}',
 //   [ProductsController::class,'show'])->where('id','[0-9]+');

 //pattern is a string
 //Route::get('/products/{name}/{id}',
  //    [ProductsController::class,'show'])->where([
  //        'name'=>'[a-z]+',
  //        'id'=>'[0-9]+'
  //    ]);


//laravel 8, also new
//Route::get('/products','App\Http\Controllers\ProductsController@index');


//before laravel 8
//Route:get('/products','ProductsController@index');