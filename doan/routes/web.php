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

Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('/login','App\Http\Controllers\UserController@login');
Route::get('/logout','App\Http\Controllers\UserController@logoutUser');
Route::post('/loginUser','App\Http\Controllers\UserController@loginUser');
Route::get('signin','App\Http\Controllers\UserController@signin');
Route::post('save/user','App\Http\Controllers\UserController@saveUser');
Route::get('checkout','App\Http\Controllers\CheckoutController@checkout');
Route::post('saveorder','App\Http\Controllers\CheckoutController@saveorder');

Route::get('admin','App\Http\Controllers\AdminController@index');
Route::post('adminlogin','App\Http\Controllers\AdminController@adminLogin');
Route::get('admin1', function () {
	return view('admin.layout');
});
Route::prefix('admin')->group(function () {
	//brand
	Route::get('addbrand','App\Http\Controllers\Brand@addbrand');
	Route::post('savebrand','App\Http\Controllers\Brand@savebrand');
	Route::get('allbrand','App\Http\Controllers\Brand@allbrand');
	Route::get('editbrand/{id}','App\Http\Controllers\Brand@editbrand');
	Route::post('updatebrand/{id}','App\Http\Controllers\Brand@updatebrand');
	Route::get('deletebrand/{id}','App\Http\Controllers\Brand@deletebrand');
	//product
	Route::get('addproduct','App\Http\Controllers\ProductController@addproduct');
	Route::post('saveproduct','App\Http\Controllers\ProductController@saveproduct');
	Route::get('allproducts','App\Http\Controllers\ProductController@allproducts');
	Route::get('unactive/{id}','App\Http\Controllers\ProductController@unactive');
	Route::get('active/{id}','App\Http\Controllers\ProductController@active');
	Route::get('editproduct/{id}','App\Http\Controllers\ProductController@editproduct');
	Route::get('deleteproduct/{id}','App\Http\Controllers\ProductController@deleteproduct');
	Route::post('updateproduct/{id}','App\Http\Controllers\ProductController@updateproduct');
	//order
	Route::get('order','App\Http\Controllers\OrderController@order');
	Route::get('order/update/{id}','App\Http\Controllers\OrderController@updateorder');
	Route::get('order/delete/{id}','App\Http\Controllers\OrderController@deleteorder');
	Route::post('updateorder/{id}','App\Http\Controllers\OrderController@update');


});
//home
Route::get('brand/{id}','App\Http\Controllers\ProductController@brandproduct');
Route::get('product/{id}','App\Http\Controllers\ProductController@productdetail');
//cart
Route::get('cart','App\Http\Controllers\CartController@cart');
Route::post('savecart','App\Http\Controllers\CartController@saveCart');
Route::post('cart/update','App\Http\Controllers\CartController@updateCart');
Route::get('cart/delete/{id}','App\Http\Controllers\CartController@deleteCart');