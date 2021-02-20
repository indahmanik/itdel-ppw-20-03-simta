<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Supervisors;
use App\Models\Users;
use App\Models\Scores;

class GradeController extends Controller
{
    public function grade(){
        
        $sup= Supervisors::where('name', 'like', (session('username')))->first();
        return view('grade', compact('sup'));

    }

    public function addgrade(Request $request)
    {
        Scores::create([
            'nip_examiner' => session('user_id'),
            'event' => $request->event,
            'team_id' =>$request->team_id ,
            'grade' => $request->grade
        ]);
        return redirect('/addscore')->with('message','Adding Score is successful');
    }

    public function score()
    {
        $sco= Scores::where('nip_examiner', 'like', (session('user_id')))->get();
        return view('score', compact('sco'));
    }

    public function delete($id)
    {
        Scores::where('id','like', $id)->delete();
	    return redirect('/scores');
    }

    public function edit($id)
    {
        $sco = Scores::where('id','like', $id)->get();
        return view('/editscore', compact('sco'));
    }

    public function update(Request $request)
    {
        Scores::where('id',$request->id)->update([
            'event' => $request->event,
            'team_id' => $request->team_id,
            'grade' => $request->grade,
        ]);
        return redirect('/scores');
    }
    
    public function cancel()
    {
        $sco= Scores::where('nip_examiner', 'like', (session('user_id')))->get();
        return view('/score', compact('sco'));
    }

    public function index()
    {
        $score = Scores::all();
        return response()->json(
            [
                "message" => "Success",
                "data" => $score,
                "links" => [
                    "edit_score" => "/api/scores/edit/{id}",
                    "delete_score" => "/api/scores/delete/{id}",
                    "add_score" => "/api/scores/addscore"
                ]
            ], 200
        );
    }

    // Create an schedule
    public function store(Request $request)
    {   
        $score = new Scores;
        $score->nip_examiner = $request->nip_examiner;
        $score->event = $request->event;
        $score->team_id = $request->team_id;
        $score->grade = $request->grade;
        
        $score->save();

        return response()->json(
            [
                "message" => "Add Score Success",
                "links" => [
                    "show_score" => "/api/scores",
                    "add_score" => "/api/scores/addscore"
                ]
            ], 201
        );
    }

    // Get one schedule
    public function show($id)
    {
        $sco = Scores::where('team_id', 'like', ($id))->first();
        if($sco)
        {
            return response()->json(
                [
                    "message" => "Success",
                    "data" => $sco
                ], 200
            );
        }
        return response()->json(
            [
                "message" => "Score with id " . $id . " not found"
            ], 400
        );
    }

    // Update one schedule
    public function updatescore(Request $request, $id)
    {
        $sco = Scores::find($id);
        if($sco)
        {
            $sco->event = $request->event ? $request->event : $sco->event;
            $sco->team_id = $request->team_id ? $request->team_id : $sco->team_id;
            $sco->grade = $request->grade ? $request->grade : $sco->grade;

            $sco->save();

            return response()->json(
                [
                    "message" => "Update Score Success",
                    "data" => $sco,
                    "links" => [
                        "edit_score" => "/api/scores/edit/{id}",
                        "delete_score" => "/api/scores/delete/{id}",
                        "add_score" => "/api/scores/addscore"
                    ]
                ], 201
            );
        }
        return response()->json(
            [
                "message" => "Score with id " . $id . " not found",
                "link" => [
                    "edit_score" => "/api/scores/edit/{id}"
                ]
            ], 400
        );
    }

    // Delete one schedule
    public function destroy(Request $request, $id)
    {
        $sco = Scores::find($id);
        if($sco)
        {
            Scores::destroy($id);
            return response()->json(
                [
                    "message" => "Delete Score with id " . $id . " Success",
                    "data" => Scores::all(),
                    "links" => [
                        "edit_score" => "/api/scores/edit/{id}",
                        "delete_score" => "/api/scores/delete/{id}",
                        "add_score" => "/api/scores/addscore"
                    ]
                ], 200
            );
        }
        return response()->json(
            [
                "message" => "Score with id " . $id . " not found",
                "link" => [
                    "delete_score" => "/api/scores/delete/{id}"
                ]
            ], 400
        );

    }
}
