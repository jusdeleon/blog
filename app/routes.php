<?php

Route::group(['prefix' => 'admin', 'before' => 'auth'], function()
{
	Route::resource('posts', 'AdminPostsController', ['except' => ['show']]);
});

Route::group(['prefix' => 'admin'], function()
{
	Route::get('login', ['as' => 'admin.login', 'uses' => 'AdminAuthController@getLogin']);
	Route::post('login', ['as' => 'admin.login.post', 'uses' => 'AdminAuthController@postLogin']);
	Route::get('logout', ['as' => 'admin.logout', 'uses' => 'AdminAuthController@getLogout']);
});

Route::get('/', ['uses' => 'PostsController@getIndex', 'as' => 'home']);
Route::get('post/{id}', ['uses' => 'PostsController@getPost', 'as' => 'post']);