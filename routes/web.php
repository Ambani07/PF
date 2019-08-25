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
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SitesExport;

Auth::routes();

Route::get('', 'AdminController@index');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/search', 'DashboardController@search')->name('search');

Route::resource('customers', 'CustomersController');
Route::resource('services', 'ServicesController');
Route::resource('product', 'ProductController');
Route::resource('site', 'SitesController');


Route::get('/download/{id}', function(){
    return Excel::download(new SitesExport, 'sites.xlsx');
});

Route::get('sites/export/{id}', 'SitesController@export');

Route::get('account', 'auth\UserController@index');
Route::get('account/{id}', 'auth\UserController@edit');
Route::put('account/{id}', 'auth\UserController@update');
Route::post('account/{id}/avatar', 'auth\UserController@update_avatar');