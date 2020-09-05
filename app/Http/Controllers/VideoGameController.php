<?php

namespace App\Http\Controllers;

use App\VideoGame;
use Illuminate\Http\Request;

class VideoGameController extends Controller
{
    public function index()
    {
        return view('video-game.index', [
            'video_games' => VideoGame::all(),
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required|string|min:2|max:255',
            'release_date' => 'date',
            'price' => 'string',
            'description' => 'string',
        ]);
        
        $attributes['user_id'] = auth()->user()->id;
        $video_game = VideoGame::create($attributes);
        return back()->with('success', $video_game->title . ' added successfully!');
    }
}
