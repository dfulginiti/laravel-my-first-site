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

        return view('home')->withTasks($tasks);
    }

    /**
     * Instead of hard coding each controller action we can dynamically render the appropriate
     * view and pass through any given arguments
     *
     * @param string $method
     * @param array $args
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function __call($method, $args)
    {
        return view($method)->with($args);
    }
}
