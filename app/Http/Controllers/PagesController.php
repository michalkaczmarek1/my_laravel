<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Player;

class PagesController extends Controller
{
	 public function index()
    {
        $teams = Team::latest()->limit(1)->get();
        $players = Player::latest()->limit(1)->get();
        return view('pages.index', compact('teams', 'players'));
    }

    public function season() 
    {
    	return view('pages.season');
    }

    public function history() 
    {
    	return view('pages.history');
    }
}
