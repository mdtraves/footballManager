<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(){

        $teams = Team::all()->sortBy('name');
        return view('teams',[
            'teams' => $teams
        ]);

    }
}
