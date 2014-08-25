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
	$item = Item::find(1);

	return View::make('user.index', compact('item'));
});

Route::post('/login', function()
{
	$name = Input::get('name');

	return Redirect::to("{$name}/shoes");
});

Route::get('/logout', function()
{
	User::$name = "";

	return Redirect::to('/');
});

Route::get('/{user}/shoes', function($user)
{
	$items = Item::all();
	if($user)
		return View::make('user.shoes', compact('user', 'items'));
	else
		return Redirect::to('/');
});

Route::get('/shoes', function()
{
	return Item::all();
});

Route::get('/admin', function()
{
	$item = Item::find(1);

	return View::make('admin.index', compact('item'));
});