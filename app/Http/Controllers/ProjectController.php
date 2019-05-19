<?php

namespace App\Http\Controllers;

use App\Notifications\ProjectCreated;
use App\Project;
use Illuminate\Auth\Access\AuthorizationException;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = auth()->user()->projects;

        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $project = Project::create($this->validateProject() + ['owner_id' => auth()->id()]);

        auth()->user()->notify(new ProjectCreated($project));

        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param Project $project
     *
     * @return \Illuminate\Http\Response
     * @throws AuthorizationException
     */
    public function show(Project $project)
    {
        $this->authorize('update', $project);

        return view('project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Project  $project
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Project  $project
     * @return \Illuminate\Http\Response
     * @throws AuthorizationException
     */
    public function update(Project $project)
    {
        $this->authorize('update', $project);

        $project->update($this->validateProject());

        return redirect("/projects");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Project  $project
     * @return \Illuminate\Http\Response
     *
     * @throws \Exception
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }

    /**
     * @return mixed
     */
    protected function validateProject()
    {
        return request()->validate([
            'title'       => ['required', 'min:3'],
            'description' => ['required', 'min:3']
        ]);
    }
}
