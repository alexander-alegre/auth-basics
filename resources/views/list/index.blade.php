@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>List</h1>
        <form action="{{route('list_store')}}" method="post">
            @csrf
            <div class="input-group flex-nowrap">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="addon-wrapping">List</span>
                </div>
                <input name="item" type="text" class="form-control" placeholder="Item" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            @error('item')
                <p class="bg-danger text-white px-1 rounded mt-3 text-center">{{$message}}</p>
            @enderror
            <button type="submit" class="btn btn-warning mt-3">Submit</button>
        </form>
    </div>
@endsection
