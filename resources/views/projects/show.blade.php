@extends('layouts.main')

@section('content')

    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>

    <a name="" id="" class="btn btn-primary" href="/projects/{{ $project->id }}/edit" role="button">Edit</a>

@endsection