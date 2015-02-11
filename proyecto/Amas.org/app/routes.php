<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@creaUsuario');



Route::group(array('prefix' => 'admin'), function()
{

	Route::get('/login', function()
	{
		return View::make('admin/login');
	});

	Route::get('/asd', function()
	{
		echo 'noreturn';
	});

	Route::get('user', function()
	{
		//
	});

});


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

