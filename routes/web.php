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

Auth::routes();

Route::get('', 'AdminController@index');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::resource('customers', 'CustomersController');
Route::resource('services', 'ServicesController');
Route::resource('product', 'ProductController');
Route::resource('site', 'SitesController');
