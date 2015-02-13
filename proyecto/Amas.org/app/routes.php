<?php

Route::get('admin/login', array('as' => 'login', 'uses' => 'AdminController@getLogin'));

Route::group(array('before' => 'auth.admin'), function()
{
	Route::get('admin', array('as' => 'admin.index', 'uses' => 'AdminController@getIndex'));
	
});

Route::filter('auth.admin', function()
{
		if (!Sentry::check()) {
			echo '1no puede acceder a admin';exit;
		} else {
			echo '2puede acceder a admin';exit;
		}
/*	$user = Sentry::getUser();
	if ( !$user->hasAccess('admin')) {
		return Redirect::route('login');
	}*/
});


/*
// rutas del admin
Route::group(array('before' => 'auth'), function()
{

	Route::get('/admin/inicio', function()
	{
		echo 'noreturn';
	});
	
	Route::get('/admin/user', function()
	{
		//
	});

	Route::get('/admin/login', function()
	{
		return View::make('admin/login');
	});

});



// auth
Route::filter('auth', function()
{
/*	$user = Sentry::getUser();
	print_r($user);exit;
	if ( !$user->hasAccess('admin')) {
		return Redirect::route('index');
	}*/
/*	if (!Sentry::check()) {
		//return Redirect::to('/admin/login');
		//return View::make('admin/login');
	}
});
*/

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

