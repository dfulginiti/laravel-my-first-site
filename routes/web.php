<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::resource('projects', 'ProjectController');

Route::patch('/tasks/{task}', 'ProjectTaskController@update');