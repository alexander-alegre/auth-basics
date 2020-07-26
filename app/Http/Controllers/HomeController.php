<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function updateProfile()
    {
        $attributes = request()->validate([
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email,' . auth()->user()->id,
        ]);

        auth()->user()->name = $attributes['name'];
        auth()->user()->email = $attributes['email'];

        auth()->user()->save();

        return back();
    }

    public function updatePassword()
    {
        $attributes = request()->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        auth()->user()->password = $attributes['password'];

        auth()->user()->save();

        return back();
    }
}
