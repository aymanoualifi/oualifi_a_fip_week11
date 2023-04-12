<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function showAllTeams()
    {
        $teams = Team::all();
        return response()->json($teams);
    }

    public function showOneTeam($id)
    {
        $teams = Team::find($id);
        if ($teams) {
            return response()->json($teams);
        } else {
            return response()->json(['error' => 'Team not found'], 404);
        }
    }

    public function createTeam(Request $request)
    {
        $teams = Team::create($request->all());
        return response()->json($teams, 201);
    }

    public function updateTeam(Request $request, $id)
    {
        $teams = Team::findOrFail($id);
        $teams->update($request->all());
        return response()->json($teams, 200);
    }

    public function deleteTeam($id)
    {
        $teams = Team::findOrFail($id);
        $teams->delete();
        return response('Deleted successfully', 200);
    }
}
