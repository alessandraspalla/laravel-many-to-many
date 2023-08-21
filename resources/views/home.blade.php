@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center m-3">All Projects</h1>
    <h4 class="text-center mb-3">
        <a class="text-success text-decoration-none" href="{{ route('project.create') }}">Create new project</a>
    </h4>
    <div class="d-flex justify-content-center">
        <ul class="list-unstyled">
            @foreach ($projects as $project)
                <li>
                    @auth
                        <a href="{{ route('project.show', $project -> id) }}">
                            {{ $project -> name }}
                        </a>
                    @endauth
                    @guest
                        {{ $project -> name }}
                    @endguest
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection