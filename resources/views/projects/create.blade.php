@extends('layouts.main')

@section('content')

    <h1>Create a new project</h1>

    <form method="POST" action="/projects">
        @csrf
        <div>
              <label for="title">Project title</label>
              <input type="text" name="title" id="" class="form-control" placeholder="">
        </div>
        <div>
              <label for="description">Description</label>
              <textarea class="form-control" name="description" id="" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create project</button>
    </form>

@endsection