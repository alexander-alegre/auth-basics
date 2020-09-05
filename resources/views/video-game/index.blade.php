@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Video Games</h1>
        <form action="{{route('video_game_store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
                @error('title')
                    <p class="bg-danger text-white px-1 rounded mt-3 text-center">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="release-date">Release Date</label>
                <input type="datetime-local" class="form-control" id="release-date" name="release_date">
                @error('release_date')
                    <p class="bg-danger text-white px-1 rounded mt-3 text-center">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price">
                @error('price')
                    <p class="bg-danger text-white px-1 rounded mt-3 text-center">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                @error('description')
                    <p class="bg-danger text-white px-1 rounded mt-3 text-center">{{$message}}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Add Video Game</button>
        </form>

        <hr>

        <div>
                <ul class="list-group mt-3">
                    @foreach($video_games as $game)
                        <li class="list-group-item">{{$game->title}}</li>
                    @endforeach
                </ul>
        </div>
    </div>
@endsection
