<?php

Route::group(['prefix' => 'admin'], function()
{
	Route::resource('posts', 'AdminPostsController', ['except' => ['show']]);
});