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

// Route::get('/', 'RedirectController@index');

Route::get('/', function(){

	if (Auth::check()){

		return Redirect::to('home');
	} else {
		return Redirect::to('login');
	}

});

Auth::routes();

Route::group(['middleware' => ['revalidate']], function()
{
	Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');

	Route::group(['middleware' => ['auth']], function(){

	    Route::get('/home', 'HomeController@index')->name('home');
	    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
	});

    //All the routes that belongs to the group goes here
    //Route::get('dashboard', function() {} );

});



//Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');


Route::post('/category_insert', 'CategoryController@category_insert');
 
