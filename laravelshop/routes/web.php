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

Route::get('/trang-chu','App\Http\Controllers\HomeController@index');

Route::get('/admin', 'App\Http\Controllers\admincontroller@admin');
Route::get('/dashboard','App\Http\Controllers\admincontroller@show_dashboard');
Route::post('/admin-dashboard','App\Http\Controllers\admincontroller@dashboard');
Route::get('/logout','App\Http\Controllers\admincontroller@logout');
Route::get('/add-category-product','App\Http\Controllers\CategotyProduct@add_category_product');
Route::get('/all-category-product','App\Http\Controllers\CategotyProduct@all_category_product');
Route::post('/save-category-product','App\Http\Controllers\CategotyProduct@save_category_product');
Route::get('/unactive-categoryproduct/{category_product_id}','App\Http\Controllers\CategoryProduct@unactive_category_product');
Route::get('/active-categoryproduct/{category_product_id}','App\Http\Controllers\CategoryProduct@active_category_product');
//Brand Product
Route::get('/add-brandproduct','App\Http\Controllers\BrandProduct@add_brand_product');
Route::get('/all-brandproduct','App\Http\Controllers\BrandProduct@all_brand_product');
Route::post('/save-brandproduct','App\Http\Controllers\BrandProduct@save_brand_product');
Route::get('/unactive-brandproduct/{brand_product_id}','App\Http\Controllers\BrandProduct@unactive_brand_product');
Route::get('/active-brandproduct/{brand_product_id}','App\Http\Controllers\BrandProduct@active_brand_product');
Route::get('/edit-brandproduct/{brand_product_id}','App\Http\Controllers\BrandProduct@edit_brand_product');
Route::post('/update-brandproduct/{brand_product_id}','App\Http\Controllers\BrandProduct@update_brand_product');
Route::get('/delete-brandproduct/{brand_product_id}','App\Http\Controllers\BrandProduct@delete_brand_product');
Route::get('/add-product','App\Http\Controllers\ProductController@add_product');
Route::post('/save-product','App\Http\Controllers\ProductController@save_product');
Route::get('/all-product','App\Http\Controllers\ProductController@all_product');
Route::get('/unactiveproduct/{product_id}','App\Http\Controllers\ProductController@unactive_product');
Route::get('/active-product/{product_id}','App\Http\Controllers\ProductController@active_product');
Route::get('/edit-product/{product_id}','App\Http\Controllers\ProductController@edit_product');
Route::post('/update-product/{product_id}','App\Http\Controllers\ProductController@update_product');
Route::get('/delete-product/{product_id}','App\Http\Controllers\ProductController@delete_product');