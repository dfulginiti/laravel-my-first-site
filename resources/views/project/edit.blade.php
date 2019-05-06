@extends('layouts.app')

@section('content')
    <h1 class="title">Edit Project</h1>

    <form method="post" action="/projects/{{ $project->id }}">
        {{ method_field('patch') }}

        @csrf

        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" placeholder="Title" name="title" value="{{ $project->title }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea type="text" class="textarea" placeholder="Title" name="description">{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Submit</button>
            </div>
        </div>
    </form>
@endsection