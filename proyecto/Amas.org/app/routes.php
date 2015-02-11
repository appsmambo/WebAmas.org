<?php

Route::get('/admin/login', function()
{
	return View::make('admin/login');
});

Route::get('/login', function()
{
	return View::make('admin/login');
});

Route::filter('auth', function()
{
	if (!Sentry::check()) {
		return Redirect::to('/admin/login');
	} else {
		return Redirect::to('/admin/inicio');
	}
});

Route::group(array('before' => 'auth', 'prefix' => 'admin'), function()
{

	Route::get('/inicio', function()
	{
		echo 'noreturn';
	});
	
	Route::get('/user', function()
	{
		//
	});

});

// AGREGAR 404 DE INDEX

Route::get('/', 'HomeController@inicio');

/*Route::filter('Sentry', function()
{
	if (!Sentry::check()) {
		return Redirect::route('cms.login');
	}
});

Route::group(array('prefix' => 'admin', 'before' => 'Sentry|inGroup:Admins'), function()
{
	Route::get('admin', array(
		'as' => 'product.index',
		'before' => 'hasAccess:product.index',
		'uses' => 'ProductController@index'
	));
});
*/

/*Route::get('/', function()
{
	return View::make('hello');
});*/
/*
Route::get('/admin', function()
{
	return View::make('admin');
});*/

