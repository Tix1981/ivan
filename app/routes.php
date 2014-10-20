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
	return View::make('hello');
});

//Route::get('ivan', array('uses' => 'views.ivan.index'));

/*Route::get('/users', function()
{
    return 'Ivan Kostadinovic';
});*/

Route::get('users', function()
{
    return 'This works!';
});

Route::get('ivan', array('uses'=>'IvanController@action_index'));

Route::get('git_test', function()
{
    return 'Trying to git!';
});

Route::get('amend_test', function()
{
    return 'Trying to amend!';
});