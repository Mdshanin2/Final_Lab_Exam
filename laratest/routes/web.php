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

Route::get('/', function(){
	echo "index page";
});


Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@verify');
Route::get('/logout', 'logoutController@index');

Route::group(['middleware'=>['sess']], function(){
	
	Route::get('/home', 'homeController@index')->name('home.index')->middleware('sess');

	//Route::get('/admin/user/stdlist', 'homeController@stdlist')->name('home.stdlist');
	Route::get('/stdlist', ['uses'=> 'homeController@stdlist', 'as'=> 'home.stdlist']);
	Route::get('/details/{id}', 'homeController@show')->name('home.show');
// employee job list
Route::get('/emphome', 'empController@index')->name('emp.index');
Route::get('/jobcreate', 'empController@create')->name('emp.create');
Route::post('/jobcreate', 'empController@store');
Route::get('/jedit/{id}', 'empController@edit')->name('emp.edit');
Route::post('/jedit/{id}', 'empController@update');
		Route::get('/jdelete/{id}', 'empController@delete');
		Route::post('/jdelete/{id}', 'empController@destroy');

	//Route::group(['middleware'=>['type']], function(){
		Route::get('/create', 'homeController@create')->name('home.create');
		Route::post('/create', 'homeController@store');
		Route::get('/edit/{id}', 'homeController@edit')->name('home.edit');
		Route::post('/edit/{id}', 'homeController@update');
		Route::get('/delete/{id}', 'homeController@delete');
		Route::post('/delete/{id}', 'homeController@destroy');
	//});
	
});

//Route::resource('/product', 'ProductController');
//Route::resource('/student', 'StudentController');

