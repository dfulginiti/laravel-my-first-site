<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectController extends Controller
{
    public function create()
    {
        return view('project.create');
    }

    public function index()
    {
        $projects = Project::all();

        return view('project.index', compact('projects'));
    }

    public function store()
    {
        $project = new Project();
        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');
    }
}
