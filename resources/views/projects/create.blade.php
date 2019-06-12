@extends('layouts.main')

@section('content')

<h1>Create a new project</h1>

<form method="POST" action="/projects">
    @csrf
    <div>
        <label for="title">Project title</label>
        <input type="text" name="title" id="" class="form-control {{ $errors->has('title') ? 'border-danger' : ''}} " value="{{ old('title') }}">
    </div>
    <div>
        <label for="description">Description</label>
        <textarea class="form-control {{ $errors->has('description') ? 'border-danger' : ''}}" name="description" id="" rows="3">{{ old('description') }}</textarea>
    </div>
    
    <button type="submit" class="btn btn-primary mt-1 mb-1">Create project</button>
    
    @if ($errors->any())
    
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    @endif 
    
</form>

@endsection