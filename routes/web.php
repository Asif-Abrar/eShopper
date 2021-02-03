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

Route::get('/', 'HomeController@index');


Route::get('/logout', 'SuperAdminController@logout');
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'SuperAdminController@index');
Route::post('/admin-dashboard', 'AdminController@dashboard');


//category
Route::get('/add-category', 'CategoryController@index');
Route::get('/all-category', 'CategoryController@all_category');
Route::post('/save-category', 'CategoryController@save_category');
Route::get('/inactive_category/{category_id}', 'CategoryController@inactive_category');
Route::get('/active_category/{category_id}', 'CategoryController@active_category');
Route::get('/edit_category/{category_id}', 'CategoryController@edit_category');
Route::post('/update_category/{category_id}', 'CategoryController@update_category');
Route::get('/delete_category/{category_id}', 'CategoryController@delete_category');

//manufacture
Route::get('/add-manufacture', 'ManufactureController@index');
Route::get('/all-manufacture', 'ManufactureController@all_manufacture');
Route::post('/save-manufacture', 'ManufactureController@save_manufacture');
Route::get('/inactive_manufacture/{manufacture_id}', 'ManufactureController@inactive_manufacture');
Route::get('/active_manufacture/{manufacture_id}', 'ManufactureController@active_manufacture');
Route::get('/edit_manufacture/{manufacture_id}', 'ManufactureController@edit_manufacture');
Route::post('/update_manufacture/{manufacture_id}', 'ManufactureController@update_manufacture');
Route::get('/delete_manufacture/{manufacture_id}', 'ManufactureController@delete_manufacture');

//product
Route::get('/add-product', 'ProductController@index');
Route::get('/all-product', 'ProductController@all_product');
Route::post('/save-product', 'ProductController@save_product');
Route::get('/inactive_product/{product_id}', 'ProductController@inactive_product');
Route::get('/active_product/{product_id}', 'ProductController@active_product');
Route::get('/edit_product/{product_id}', 'ProductController@edit_product');
Route::post('/update_product/{product_id}', 'ProductController@update_product');
Route::get('/delete_product/{product_id}', 'ProductController@delete_product');

//slider
Route::get('/add-slider', 'SliderController@index');
Route::get('/all-slider', 'SliderController@all_slider');
Route::post('/save-slider', 'SliderController@save_slider');
Route::get('/inactive_slider/{slider_id}', 'SliderController@inactive_slider');
Route::get('/active_slider/{slider_id}', 'SliderController@active_slider');
Route::get('/delete_slider/{slider_id}', 'SliderController@delete_slider');

//category wise product
Route::get('/product_by_category/{category_id}', 'HomeController@show_product_by_category');

//manufacture wise product
Route::get('/product_by_manufacture/{manufacture_id}', 'HomeController@show_product_by_manufacture');

//product details by id
Route::get('/view_product/{product_id}', 'HomeController@product_details_by_id');

//cart
Route::post('/add-to-cart', 'CartController@add_to_cart');
Route::get('/show_cart', 'CartController@show_cart');
Route::get('/delete_to_cart/{rowId}', 'CartController@delete_to_cart');
Route::post('/update_cart', 'CartController@update_cart');

//checkout
Route::get('/login_check', 'CheckoutController@login_check');
Route::post('/customer_registration', 'CheckoutController@customer_registration');
Route::get('/checkout', 'CheckoutController@checkout');
Route::post('/save_shipping_details', 'CheckoutController@save_shipping_details');

//customer
Route::post('/customer_login', 'CheckoutController@customer_login');
Route::get('/customer_logout', 'CheckoutController@customer_logout');