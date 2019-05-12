<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;

class ProjectTaskController extends Controller
{
    public function store(Project $project)
    {
        $attributes = request()->validate(['description' => 'required|max:255']);

        $project->addTask($attributes);

        return back();
    }

    public function update(Task $task)
    {
        request()->has('completed') ? $task->complete() : $task->incomplete();

        return back();
    }
}
