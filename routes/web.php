<?php

use Illuminate\Support\Facades\Auth;


Route::get('/', 'PostsController@index');
Route::get('/users/{id}', 'UsersController@index');

Auth::routes();

