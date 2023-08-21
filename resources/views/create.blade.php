@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1 class="mt-3">Create New Projects</h1>
        <form action="{{ route('project.store') }}" method="post">

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
            <div class="form-floating my-3 w-25 m-auto">
                <input type="text" class="form-control" id="floatingInput" name="image">
                <label for="image">Image</label>
            </div>
            <div class="form-floating my-3 w-25 m-auto">
                <input type="date" class="form-control" id="floatingInput" name="start_date">
                <label for="start_date">Start Date</label>
            </div>
            <div class="form-floating my-3 w-25 m-auto">
                <input type="date" class="form-control" id="floatingInput" name="end_date">
                <label for="end_date">End Date</label>
            </div>
            <select class="form-select w-25 m-auto my-3" name="type_id" id="type_id">
                @foreach ($types as $type)
                    <option value="{{ $type -> id }}">
                        {{ $type -> kind }}
                    </option>
                @endforeach
            </select>
            <select class="form-select w-25 m-auto my-3" name="technology_id" id="technology_id">
                @foreach ($technologies as $technology)
                    <option value="{{ $technology -> id }}">
                        {{ $technology -> name }}
                    </option>
                @endforeach
            </select>    
            <button class="btn btn-success" type="submit">Create</button>                                                                
        </form>
    </div>
@endsection