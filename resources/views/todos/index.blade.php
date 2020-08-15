@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>To Do</h1>
        <form action="{{route('todo_store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
                @error('title')
                <p class="bg-danger text-white px-1 rounded mt-3 text-center">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <ul class="list-group mt-3">
            @foreach($todos as $todo)
            <li class="list-group-item">{{$todo->title}}</li>
            @endforeach
        </ul>

    </div>
@endsection
