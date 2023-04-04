<?php

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

//font end routes======================================================
Route::get('/', 'HomeController@index'); 

//show products from category
Route::get('/category/{category_id}', 'HomeController@category_page');
//show single product
Route::get('/view_product/{product_id}', 'HomeController@product_page');

//product search

Route::post('/search-products', 'HomeController@product_search');

///// Cart routes //////
Route::post('/add-item-to-cart', 'CartController@add_item_to_cart');
Route::get('/show-cart', 'CartController@show_cart');
Route::get('/remove-from-cart/{rowId}', 'CartController@remove_from_cart');
Route::post('/update-cart', 'CartController@update_cart');

/////Checkout routes //////
Route::get('/login-check', 'CheckoutController@login_check');
Route::post('/customer-register', 'CheckoutController@customer_register');
Route::get('/checkout', 'CheckoutController@checkout');
Route::post('/add-shipping', 'CheckoutController@add_shipping');
//customer login logout
Route::post('/customer-login', 'CheckoutController@customer_login');
Route::get('/user-logout', 'CheckoutController@user_logout');

//payment route
Route::get('/payment', 'CheckoutController@payment');
Route::post('/order-payment', 'CheckoutController@order_payment');


//user dashboard


Route::get('/my-account', 'HomeController@my_account');














//backend routes======================================================= 
Route::get('/logout', 'ActionController@logout'); 
Route::get('/admin', 'AdminController@index'); 
Route::get('/dashboard', 'AdminController@indexdashboard') ->middleware('adminmiddleware');

//admin login auth
Route::post('/admin-auth', 'AdminController@adminauth');

//backend dashboard routes - Category
Route::get('/add-category', 'CategoryController@index');
Route::get('/manage-category', 'CategoryController@manage_category');
Route::get('/disable-category/{category_id}', 'CategoryController@disable_category');
Route::get('/active-category/{category_id}', 'CategoryController@active_category');
Route::get('/edit-category/{category_id}', 'CategoryController@edit_category');
Route::get('/delete-category/{category_id}', 'CategoryController@delete_category');


Route::post('/update-category/{category_id}', 'CategoryController@update_category');
Route::post('/route-add-category', 'CategoryController@route_add_category');

//backend dashboard routes - Products
Route::get('/add-products', 'ProductsController@index');
Route::get('/manage-products', 'ProductsController@manage_products');

Route::get('/disable-product/{product_id}', 'ProductsController@disable_product');
Route::get('/activate-product/{product_id}', 'ProductsController@activate_product');
Route::get('/edit-products/{product_id}', 'ProductsController@edit_products');
Route::get('/delete-product/{product_id}', 'ProductsController@delete_product');



Route::post('/route-add-products', 'ProductsController@route_add_products');
Route::post('/update-products/{product_id}', 'ProductsController@update_products');

//backend dashboard routes - Manage Orders

Route::get('/manage-orders', 'CheckoutController@manage_orders');
Route::get('/view-order/{order_id}', 'CheckoutController@view_orders');

Route::get('/mark-paid/{order_id}', 'CheckoutController@mark_paid');
Route::get('/unmark-paid/{order_id}', 'CheckoutController@unmark_paid');

Route::post('/search-order', 'AdminController@search_order');

Route::get('/mark-completed/{order_id}', 'CheckoutController@mark_completed');
Route::get('/unmark-completed/{order_id}', 'CheckoutController@unmark_completed');

//backend dashboard toutes - Manage Users

Route::get('/manage-users', 'AdminController@manage_users');



















