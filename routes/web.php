<?php

/* GET/POST/PUT/DELETE */

// Route::get('/', 'PostController@index');
// Route::get('posts/create', 'PostController@create');
// Route::post('posts', 'PostController@store');
// Route::get('posts/{id}', 'PostController@show');
// Route::get('posts/{id}/edit', 'PostController@edit');
// Route::put('posts/{id}', 'PostController@update');
// Route::delete('posts/{id}', 'PostController@destroy');

/* Resource */

Route::resource('/', 'PostController');
Route::resource('post', 'PostController');