@extends('layouts.app')

@section('content')
    <h1 class="title">Create a new project</h1>

    <form method="post" action="/projects">
        @csrf

        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Project title">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>

            <textarea class="input" name="description" placeholder="Project description"></textarea>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create Project</button>
            </div>
        </div>
    </form>
@endsection