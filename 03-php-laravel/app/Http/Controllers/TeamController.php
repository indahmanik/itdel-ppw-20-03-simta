<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teams;
use App\Models\Supervisors;
use App\Models\Examiners;

class TeamController extends Controller
{
    public function team()
    {
        return view('/team');
    }

    public function crTeam()
    {
        return view('/addTeam');
    }
 
    public function crSup()
    {
        return view('/addSupervisor');
    }

    public function crEx()
    {
        return view('/addExaminer');
    }

    public function mTeam()
    {
        return view('/mTeam');
    }

    public function addTeam(Request $request)
    {
        Teams::create([
            'registration_id' => $request->registration_id,
            'team' => $request->team,
            'name' => $request->name,
            'nim' => $request->nim,
            'team_id' => $request->team_id,
            'title' => $request->title
        ]);
        
        return redirect('/team');
    }

    public function addSup(Request $request)
    {
        Supervisors::create([
            'name' => $request->name,
            'nip' => $request->nip,
            'team' => $request->team
        ]);
        
        return redirect('/team');
    }

    public function addExa(Request $request)
    {
        Examiners::create([
            'name' => $request->name,
            'nip' => $request->nip,
            'team' => $request->team
        ]);
        
        return redirect('/team');
    }

    public function details()
    {
        $teams = Teams::all();
        return view('team', compact('teams'));
    }

    public function deleteTeam($id)
    {
        Teams::where('registration_id','like', $id)->delete();
	    return redirect('/team');
    }
    
    public function deleteSup($id)
    {
        Supervisors::where('nip','like', $id)->delete();
	    return redirect('/team');
    }
    
    public function deleteEx($id)
    {
        Examiners::where('nip','like', $id)->delete();
	    return redirect('/team');
    }

    public function edit($id)
    {
        $teams = Teams::where('registration_id','like', $id)->get();
        return view('editTeam', compact('teams'));
    }
  
    public function supedit($id)
    {
        $sups = Supervisors::where('nip','like', $id)->get();
        return view('editSup', compact('sups'));
    }
  
    public function exedit($id)
    {
        $exams = Examiners::where('nip','like', $id)->get();
        return view('editEx', compact('exams'));
    }

    public function update(Request $request)
    {
        Teams::where('registration_id',$request->id)->update([
            'team' => $request->team,
            'name' => $request->name,
            'nim' => $request->nim,
            'team_id' => $request->team_id,
            'title' => $request->title
        ]); 
        return redirect('/team')->with('message','Data berhasil diubah.');
    }

    public function updateSup(Request $request)
    {
        $sups = Supervisors::where('nip',$request->id);
        $sups->update([
            'team' =>request('team'),
            'nip' => request('nip'),
            'name' => request('name'),
            'fullname' => request('fullname'),
            'position' => request('position'),
            'major' => request('major'),
            'faculty' => request('faculty'),
            'status' => request('status')
        ]); 
        return redirect('/team')->with('message','Data berhasil diubah.');
    }

    public function updateEx(Request $request)
    {
        $exams = Examiners::where('nip',$request->id);
        $exams->update([
            'team' =>request('team'),
            'nip' => request('nip'),
            'name' => request('name'),
            'fullname' => request('fullname'),
            'position' => request('position'),
            'major' => request('major'),
            'faculty' => request('faculty'),
        ]); 
        return redirect('/team')->with('message','Data berhasil diubah.');
    }

    // API-Controller
    function get()
    {
        $data = Teams::all();
        return response()->json(
            [
                "message" => "Success",
                "data" => $data,
                "links" => [
                    "edit_team" => "/api/team/edit/{id}",
                    "delete_team" => "/api/team/delete/{id}",
                    "add_team" => "/api/team/create"
                ]
            ]
        );
    }

    function getById($id)
    {
        $data = Teams::where('registration_id', $id)->get();
        return response()->json(
            [
                "message" => "Success",
                "data" => $data,
                "links" => [
                    "edit_team" => "/api/team/edit/{id}",
                    "delete_team" => "/api/team/delete/{id}",
                    "add_team" => "/api/team/create"
                ]
            ]
        );
    }

    public function delete($id)
    {
        $teams = Teams::where('registration_id', $id)->first();
        if($teams){
            $teams->delete();
            return response()->json(
                [
                    "message" => "DELETE Team with registration_id " . $id . " Success",
                    "links" => [
                        "edit_team" => "/api/team/edit/{id}",
                        "delete_team" => "/api/team/delete/{id}",
                        "add_team" => "/api/team/create"
                    ]
                ]
            );
        }
        return response()->json(
            [
                "message" => "Team with registration_id " . $id . " not found",
                "links" => [
                    "edit_team" => "/api/team/edit/{id}",
                    "delete_team" => "/api/team/delete/{id}",
                    "add_team" => "/api/team/create"
                ]
            ], 404
        );
    }

    public function post(Request $request){
        $team = new Teams;
        $team->registration_id = $request->registration_id;
        $team->team_id = $request->team_id;
        $team->team = $request->team;
        $team->name = $request->name;
        $team->nim = $request->nim;
        $team->title = $request->title;
    
        $team->save();
    
        return response()->json(
                [
                    "message" => "Success",
                    "data" => $team,
                    "links" => [
                        "edit_team" => "/api/team/edit/{id}",
                        "delete_team" => "/api/team/delete/{id}",
                        "add_team" => "/api/team/create"
                    ]
                ]
            );
    }
    
     function put($id, Request $request)
    {
        $team = Teams::where('registration_id', $id)->first();
        if($team){
            $team->team_id = $request->team_id ? $request->team_id : $team->team_id;
            $team->team = $request->team ? $request->team : $team->team;
            $team->name = $request->name ? $request->name : $team->name; 
            $team->nim = $request->nim ? $request->nim : $team->nim;
            $team->title = $request->title ? $request->title : $team->title;

            $team->save();
            return response()->json(
                [
                    "message" => "PUT Method Success",
                    "data" => $team,
                    "links" => [
                        "edit_team" => "/api/team/edit/{id}",
                        "delete_team" => "/api/team/delete/{id}",
                        "add_team" => "/api/team/create"
                    ]
                ]
            );
        }
        return response()->json(
            [
                "message" => "Team with registration_id " . $id . " not found"
            ], 404
        );
    }
}
