<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function show(){
        $games = Game::all();
        return view('welcome',compact('games'));
    }
}
