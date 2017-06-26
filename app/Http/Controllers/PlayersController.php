<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Requests\CreatePlayerRequest;
use App\Player;
use Auth;
use Session;


class PlayersController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth', ['only'=>'create']);
    }
    
	/**
	 * pobranie listy filmow z bazy
	 */

    public function index()
    {
    	$players = Player::latest()->get();
    	return view('players.index')->with('players',$players);
    }

    /**
     * jeden zawodnik
     */

    public function show($id)
    {
    	$player = Player::findOrFail($id);
        return view('players.show')->with('player', $player); 
    }

    /**
     * formularz dodawania zawodnika
     */

    public function create()
    {
        return view('players.create');
    }

    /**
     * zapisanie zawodnika
     */

    public function store(CreatePlayerRequest $request)
    {
        $player = new Player($request->all());
        Auth::user()->players()->save($player);
        Session::flash('player_created', 'Twoj wpis został dodany');
        return redirect('players');
    }

    /**
     * Formularz edycji
     */

    public function edit($id)
    {
        $player = Player::findOrFail($id);
        return view('players.edit')->with('player', $player);
    }

    /**
     * Aktualizacja rekordu
     */

    public function update($id, CreatePlayerRequest $request)
    {
        $player = Player::findOrFail($id);
        $player->update($request->all());
        return redirect('players');
    }
}

