<?php

use Illuminate\Support\Facades\Auth;


Route::get('/', 'PostsController@index');

Auth::routes();

