<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', ['todos' => $todos] );
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required|min:2|max:255|unique:todos'

        ]);
        Todo::create($attributes);
        return back()->with('status', 'submit complete');
    }
}
