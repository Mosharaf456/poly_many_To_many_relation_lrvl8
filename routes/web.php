<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// insert operation
Route::get('/fileup','FileUploadController@create');

Route::post('/fileup','FileUploadController@store');

// insert operation
Route::get('/users/create','UsersController@create');

Route::post('/users/create','UsersController@store');

//show page
Route::get('/images','UsersController@images');

//many to many poly

// for store operation
Route::resource('/videos','VideosController');

Route::resource('/posts','PostsController');

//
Route::resource('/tags','TagsController');

Route::post('/videos/{id}/comments' , 'CommentsController@videoComment');

Route::post('/posts/{id}/comments' , 'CommentsController@postComment');

Route::get('/comments', 'CommentsController@index');


