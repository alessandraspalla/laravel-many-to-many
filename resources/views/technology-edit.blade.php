@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1 class="mt-3">Create New Technologies</h1>
        <form 
        method="POST" 
        action="{{ route('technology.update', $technology -> id) }}"
        >

            @csrf
            @method("PUT")

            <div class="form-floating my-3 w-25 m-auto">
                <input type="text" class="form-control" id="floatingInput" name="name" value="{{ $technology -> name }}">
                <label for="name">Name</label>
            </div>
            <div class="form-floating my-3 w-25 m-auto">
                <input type="text" class="form-control" id="floatingInput" name="description" value="{{ $technology -> description }}">
                <label for="description">Description</label>
            </div>
            @foreach ($projects as $project)
                <div class="form-check w-25 m-auto">
                    <input class="form-check-input" type="checkbox" value="{{ $project -> id }}" id="flexCheckDefault" name="projects[]"
                    @foreach ($technology -> projects as $techProject)
                        @if ($techProject -> id == $project -> id)
                            checked
                        @endif
                    @endforeach
                    >
                    <label class="form-check-label" for="flexCheckDefault">
                        {{ $project -> name }}
                    </label>
                </div> 
            @endforeach
              
            <button class="btn btn-success mt-3" type="submit">Update</button>                                                                
        </form>
    </div>
@endsection