@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center m-3">
        <h1>{{$project -> name}}</h1>
        <img class="my-3" src="{{ $project -> image }}" alt="lorem picsum">
        <p class="w-50 m-auto">{{$project -> description}}</p>
        <div class="d-flex justify-content-center mt-3">
            <span><strong>Start:</strong></span>
            <span class="badge text-bg-info mx-3">
                {{ $project -> start_date }}
            </span>
            <span>End:</span>
            <span class="badge text-bg-info mx-3">
                {{ $project -> end_date }}
            </span>
        </div>
        <ul class="list-unstyled mt-3">
            <li><strong>Type:</strong> {{$project -> type -> kind}}</li>
            <li><strong>Funding:</strong> {{$project -> type -> funding}}</li>
            <li><strong>Estimated Time:</strong> {{$project -> type -> timing}}</li>
            <li>
                <strong>Technologies:</strong> 
                @foreach ($project -> technologies as $technology)
                    &#8226 {{ technology -> name }}
                @endforeach
            </li>
        </ul>
    </div>
</div>
@endsection