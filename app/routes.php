<?php

Route::resource('posts', 'PostsController', ['except' => ['show']]);

