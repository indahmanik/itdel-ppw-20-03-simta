<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Events;
use App\Models\Teams;
use App\Models\Scores;

class ProfilemController extends Controller
{
    
    public function profilem()
    {
        $stu = Students::where('name', 'like', (session('username')))->first();
        $team = Teams::where('nim', 'like', (session('user_id')))->first();
        $event = Events::where('team_id', 'like', ($team->team_id))->get();
        $score = Scores::where('team_id', 'like', ($team->team_id))->get();
        $sum = Scores::where('team_id', 'like', ($team->team_id))->sum('grade');
        $sc = Scores::where('team_id', 'like', ($team->team_id))->avg('grade');

        return view('profilem', compact('stu', 'team', 'event', 'score', 'sc', 'sum'));
    }

    public function addeventm(Request $request)
    {
        Events::create([
            'event' => $request->event,
            'team_id' => $request->team_id,
            'date' => $request->date,
            'description' => $request->description
        ]);
        return redirect('/profilem');
    }

    public function delete($id)
    {
        Events::where('id_event',$id)->delete();
	    return redirect('/profilem');
    }

    public function edit($id)
    {
        $event = Events::where('id_event','like', $id)->get();
        return view('eventedm', compact('event'));
    }

    public function updateweb(Request $request)
    {
        Events::where('id_event',$request->id)->update([
            'event' => $request->event,
            'team_id' => $request->team_id,
            'date' => $request->date,
            'description' => $request->description
        ]);
        return redirect('/profilem');
    }

    // Get all schedule
    public function index($id)
    {
        $team = Teams::where('nim', 'like', ($id))->first();
        if($team)
        {
            return Events::where('team_id', 'like',($team->team_id))->get(['event', 'team_id', 'date', 'description']);
        }
        return ('There is no schedule for this team.');
        // return Events::all();
    }

    // Create an schedule
    public function store(Request $request)
    {
        // Events::create([
        // 'event' => $request->event,
        // 'date' => $request->date,
        // 'description' => $request->description
        // ]);
        
        return Events::create($request->all());
    }

    // Get one schedule
    public function show($id)
    {
        $team = Events::where('id_event', 'like', ($id))->first();
        if($team)
        {
            return Events::find($id);;
        }
        return ('There is no schedule for this team.');
    }

    // Update one schedule
    public function update(Request $request, $id)
    {
        $event = Events::find($id);
        if($event)
        {
            $event->update($request->all());
            return $event;
        }
        return ('The schedule id is not exist.');
    }

    // Delete one schedule
    public function destroy(Request $request, $id)
    {
        $event = Events::find($id);
        if($event)
        {
            Events::destroy($id);
            return ('Schedule is deleted.');
        }
        return ('The schedule id is not exist.');

    }
}
