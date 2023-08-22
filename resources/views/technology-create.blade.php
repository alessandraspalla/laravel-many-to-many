@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1 class="mt-3">Create New Technologies</h1>
        <form method="POST" action="{{ route('technology.store') }}">

            @csrf
            @method("POST")

            <div class="form-floating my-3 w-25 m-auto">
                <input type="text" class="form-control" id="floatingInput" name="name">
                <label for="name">Name</label>
            </div>
            <div class="form-floating my-3 w-25 m-auto">
                <input type="text" class="form-control" id="floatingInput" name="description">
                <label for="description">Description</label>
            </div>
            @foreach ($projects as $project)
                <div class="form-check w-25 m-auto">
                    <input class="form-check-input" type="checkbox" value="{{ $project -> id }}" id="flexCheckDefault" name="projects[]">
                    <label class="form-check-label" for="flexCheckDefault">
                        {{ $project -> name }}
                    </label>
                </div> 
            @endforeach
              
            <button class="btn btn-success mt-3" type="submit">Create</button>                                                                
        </form>
    </div>
@endsection