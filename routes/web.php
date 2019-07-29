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
	return view('index');
});
//đường dẫn vào form
Route::get('/create','categoryController@GetAdd')->name('create');
//khi submit
Route::post('/create','categoryController@PostAdd');

Route::get('/edit/{id}','categoryController@getedit')->name('cat_edit');
Route::post('/edit/{id}','categoryController@postedit');
Route::get('/view','categoryController@view')->name('cat_view');
Route::get('del-{id}','categoryController@del')->name('cat_del');
Route::get('search','categoryController@getSearch')->name('search');

