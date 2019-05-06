<?php

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::get('/projects', 'ProjectController@index');
Route::post('/projects', 'ProjectController@store');
Route::get('/projects/create', 'ProjectController@create');
