<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grocery;

class GroceryController extends Controller
{
    public function index()
    {
      return view("list.index");
    }
    public function store()
    {
        $attributes = request()->validate([
            'item' => 'required'
        ]);
        Grocery::create($attributes);
        return back()->with('status', 'Item Added');
    }
}
