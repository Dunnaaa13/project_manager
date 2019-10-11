<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamsController extends Controller
{
        public function index()
    {
    	$projects = Team::all();
    	return view('teams.index')->with('teams', $teams);
    }

    public function create()
    {
    	return view('teams.create');
    }

    public function store()
    {
        request()->validate([
            'id' => 'required',
            'name' => 'required',
        ]);
        
    	$team = new Team;
    	$team->id = request()->id;
    	$team->name = request()->name;
    	$team->save();

    	return redirect('/teams');
    }
    
    public function edit(Team $team)
    {
        return view('teams.edit')->with('team', $team);
    }

    public function update(Team $team)
    {
        $team->id = request()->id;
        $team->name = request()->name;
        $team->save();
        return redirect('/teams');
    }
}
