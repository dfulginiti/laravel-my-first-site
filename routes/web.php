<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'ProjectController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::resource('projects', 'ProjectController')->middleware('auth');

Route::post('/projects/{project}/tasks/', 'ProjectTaskController@store');
Route::patch('/tasks/{task}', 'ProjectTaskController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
