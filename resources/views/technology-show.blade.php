@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center m-3">
        <h1>{{ $technology -> name }}
            <a class="btn btn-primary" href="{{ route('technology.edit', $technology -> id) }}">
                EDIT
            </a>
        </h1>   
        <p class="mt-5 w-50 m-auto">{{ $technology -> description }}</p>
        <ul>
            @foreach ($technology -> projects as $project)
                <li>
                    {{ $project -> name }}
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection