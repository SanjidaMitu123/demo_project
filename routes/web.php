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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/c1','Frontend\CtableController@index');
Route::get('/home','Backend\HomeController@index')->name('dashboard');
Route::get('/tables','Backend\HomeController@tables')->name('dashboard.tables');
//form
Route::get('/form','FormController@showform')->name('dashboard.form');
Route::post('/form/info','FormController@info')->name('form.info');
Route::get('/form/list','FormController@list')->name('form.list');
Route::get('/form/delete/{id}','FormController@delete')->name('form.delete');
Route::get('/form/view/{id}','FormController@viewdata')->name('form.view');

//category
Route::get('/category','CategoryController@showcategory')->name('dashboard.category');
Route::post('/category/insert','CategoryController@insert')->name('category.insert');
Route::get('/tables','CategoryController@list')->name('dashboard.tables');