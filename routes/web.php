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


Route::get('/', function () {

    return view('website.home');
})->name('home-page');

Route::get('about', function () {
    return view('website.about');
})->name('about');

Route::get('services', function () {
    return view('website.service');
})->name('services');

Route::get('protfolio', function () {
    return view('website.portfolio');
})->name('portfolio');

Route::get('contact', function () {
    return view('website.contact');
})->name('contact');

Route::get('product/{id}','websiteController@getproductlist')->name('product');
Route::get('product/single/{id}','websiteController@getSingleProduct')->name('product.single');

// testing stash command


Auth::routes();

Route::get('/home', 'AdminController@productList')->name('home');

// admin routes

Route::group(["middleware" => "auth", "prefix" => "admin"], function () {
    Route::get('product', 'AdminController@productList')->name('product.list');
    Route::get('add-product', 'AdminController@addProductForm')->name('product.add-form');
    Route::post('add-product', 'AdminController@addProduct')->name('product.post');
    Route::get('edit-product/{id}', 'AdminController@editProductForm')->name('product.edit-form');
    Route::post('edit-product', 'AdminController@updateProduct')->name('product.update');
    Route::get('delete-product/{id}','AdminController@deleteProduct')->name('product.delete');
    Route::get('vendor', 'AdminController@vendorList')->name('vendor.list');
    Route::post('add-vendor', 'AdminController@addVendor')->name('vendor.add');
    Route::get('category','AdminController@categoryList')->name('category.list');
    Route::post('add-category','AdminController@addCategory')->name('category.add');
    Route::post('update-category','AdminController@updateCategory')->name('category.update');
    Route::get('delete-category/{id}','AdminController@deleteCategory')->name('category.delete');
    Route::get('type','AdminController@typeList')->name('type.list');
    Route::post('add-type','AdminController@addType')->name('type.add');

});
