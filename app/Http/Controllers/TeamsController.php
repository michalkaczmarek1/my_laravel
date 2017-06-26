<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Requests\CreateTeamRequest;
use App\Team;
use Auth;
use Session;

class TeamsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }
    
    /**
	 * pobranie listy druzyn z bazy
	 */

    public function index()
    {
    	$teams = Team::latest()->get();
    	return view('teams.index')->with('teams', $teams);
    }

    /**
     * jedna druzyna
     */

    public function show($id)
    {
    	$team = Team::findOrFail($id);
    	return view('teams.show')->with('team', $team);
    }

    /**
     * formularza dodawania druzyny
     */

    public function create()
    {
        return view('teams.create');
    }

    /**
     * zapisanie druzyny
     */

    public function store(CreateTeamRequest $request)
    {
        $team = new Team($request->all());
        Auth::user()->teams()->save($team);
        Session::flash('teams_created', 'Twoj wpis został dodany');
        return redirect('teams');
    }

    /**
     * Formularz edycji
     */

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('teams.edit')->with('team', $team);
    }

    /**
     * Aktualizacja rekordu
     */

    public function update($id, CreateTeamRequest $request)
    {
        $team = Team::findOrFail($id);
        $team->update($request->all());
        return redirect('teams');
    }
}
