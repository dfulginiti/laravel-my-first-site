<?php

Route::get('/', function () {
    $tasks = [
        'Go to the store',
        'Walk the dog',
        'Pick up food for later'
    ];

    return view('welcome')->withTasks($tasks);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});
