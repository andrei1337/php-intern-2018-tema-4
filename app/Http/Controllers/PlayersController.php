<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index(){
        return view('players.index');
    }

    public function create(){
        return view('players.create');
    }

    public function update(){
        return view('players.update');
    }
}
