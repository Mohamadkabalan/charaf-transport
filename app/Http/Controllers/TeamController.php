<?php

namespace App\Http\Controllers;

use App\Team;
use DB;

class TeamController extends Controller
{

    function index()
    {
        $teams = Team::all();
        return view('team.index', compact('teams'));
    }
}