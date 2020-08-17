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
    return view('dashboard');
})->middleware('auth');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/profile', 'ProfileController@index');
Route::post('user-management/search', 'UserManagementController@search')->name('user-management.search');

Route::resource('PUV-Driver-Management', 'PUVDriverManagementController');
Route::post('/PUV-Driver-Management/store','PUVDriverManagementController@store');
Route::post('PUV-Driver-Management/search', 'PUVDriverManagementController@search')->name('PUV-Driver-Management.search');

Route::resource('Apprehension-report', 'AppReportController');
Route::post('/Apprehension-report/store','AppReportController@store');
Route::post('Apprehension-report/search', 'AppReportController@search')->name('Apprehension-report.search');

Route::resource('user-management', 'UserManagementController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


