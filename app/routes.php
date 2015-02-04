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

Route::get('/', function()
{
	return View::make('index');
});

Route::get('index', function()
{
	return View::make('index');
});

Route::get('index.html', function()
{
	return View::make('index');
});

Route::get('index.php', function()
{
	return View::make('index');
});

Route::get('about', function()
{
	return View::make('about');
});

Route::get('about.html', function()
{
	return View::make('about');
});

Route::get('about.php', function()
{
	return View::make('about');
});

Route::get('services', function()
{
	return View::make('services');
});

Route::get('services.html', function()
{
	return View::make('services');
});

Route::get('services.php', function()
{
	return View::make('services');
});

Route::get('contact', function()
{
	return View::make('contact');
});

Route::get('contact.html', function()
{
	return View::make('contact');
});

Route::get('contact.php', function()
{
	return View::make('contact');
});

Route::post('submit_message_c', array('uses' => 'AdController@submit_message_c'));

Route::post('submit_message_r', array('uses' => 'AdController@submit_message_r'));

Route::get('logout', array('uses' => 'AdController@logout'));

Route::post('submit_message', array('uses' => 'AdController@submit_message'));


// Route::get('ad', array('before' => 'auth.basic', function()
// {
    // return View::make('hello');
// }));

Route::get('ad', array('before' => 'auth.basic', 'uses' => 'AdController@index'));
