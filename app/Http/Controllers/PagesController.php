<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $tasks = [
            'Go to the store',
            'Walk the dog',
            'Pick up food for later'
        ];

        return view('welcome')->withTasks($tasks);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
