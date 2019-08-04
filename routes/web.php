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

Route::resource('customers', 'CustomersController');
Route::resource('services', 'ServicesController');
Route::resource('product', 'ProductController');
Route::resource('site', 'SitesController');

// Route::get('/excel_export', 'ExportExcelController@index');

// Route::get('/excel_export/excel', 'ExportExcelController@excel')->name('export_excel.excel');

Route::get('/download/{id}', function(){
    return Excel::download(new SitesExport, 'sites.xlsx');
});

Route::get('sites/export/{id}', 'SitesController@export');

// return Excel::download(new UsersExport, 'users.xlsx');