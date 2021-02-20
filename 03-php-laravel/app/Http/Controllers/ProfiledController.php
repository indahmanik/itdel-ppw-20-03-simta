<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supervisors;
use App\Models\Events;
use App\Models\Teams;

class ProfiledController extends Controller
{    
    public function profiled()
    {
        $sup = Supervisors::where('name', 'like', (session('username')))->first();
        $team = Teams::where('team', 'like', ($sup->team))->first();
        $event = Events::where('team_id', 'like', ($team->team_id))->get();
        return view('profiled', compact('sup', 'team', 'event'));
    }

    public function addeventd(Request $request)
    {
        Events::create([
            'event' => $request->event,
            'team_id' => $request->team_id,
            'date' => $request->date,
            'description' => $request->description
        ]);
        return redirect('/profiled');
    }

    public function delete($id)
    {
        Events::where('id_event','like', $id)->delete();
	    return redirect('/profiled');
    }

    public function edit($id)
    {
        $event = Events::where('id_event','like', $id)->get();
        return view('eventedd', compact('event'));
    }

    public function updateweb(Request $request)
    {
        Events::where('id_event',$request->id)->update([
            'event' => $request->event,
            'team_id' => $request->team_id,
            'date' => $request->date,
            'description' => $request->description
        ]);
        return redirect('/profiled');
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
        //     'event' => $request->event,
        //     'date' => $request->date,
        //     'description' => $request->description
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
        // $ev = Events::find($id);
        // $ev->update([
        //     'event' => 'Seminar',
        // ]);
        // return $ev;

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
        return Events::destroy($id);
    }
}
