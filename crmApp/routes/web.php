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

//Route::put('orders/{id}/update', 'App\Http\Controllers\ordersController@update');
Route::resource('account','App\Http\Controllers\accountsController');
Route::put('account/{id}/update', 'App\Http\Controllers\accountsController@update');
Route::delete('account/{id}/delete', 'App\Http\Controllers\accountsController@delete');

Route::resource('contact','App\Http\Controllers\contactsController');
Route::put('contact/{id}/update', 'App\Http\Controllers\contactsController@update');
Route::delete('contact/{id}/delete', 'App\Http\Controllers\contactsController@delete');

Route::resource('lead','App\Http\Controllers\leadsController');
Route::put('lead/{id}/update', 'App\Http\Controllers\leadsController@update');
Route::delete('lead/{id}/delete', 'App\Http\Controllers\leadsController@delete');

Route::resource('leadsource','App\Http\Controllers\leadsourceController');
Route::put('leadsource/{id}/update', 'App\Http\Controllers\leadsourceController@update');
Route::delete('leadsource/{id}/delete', 'App\Http\Controllers\leadsourceController@delete');

Route::resource('activities','App\Http\Controllers\activitiesController');
Route::put('activities/{id}/update', 'App\Http\Controllers\activitiesController@update');
Route::delete('activities/{id}/delete', 'App\Http\Controllers\activitiesController@delete');

Route::resource('opportunities','App\Http\Controllers\opportuitiesController');
Route::put('opportunities/{id}/update', 'App\Http\Controllers\opportuitiesController@update');
Route::delete('opportunities/{id}/delete', 'App\Http\Controllers\opportuitiesController@delete');

Route::get('/dashboard','App\Http\Controllers\dashboardController@index');
Route::get('/homee','App\Http\Controllers\homeeController@index');

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/app', function () {
    return view('appp');
});
