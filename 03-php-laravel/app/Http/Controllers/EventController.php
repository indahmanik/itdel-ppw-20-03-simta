<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\Teams;

class EventController extends Controller
{
    

    public function event()
    {
        return view('event');
    }

    public function addevent(Request $request)
    {
        Events::create([
            'event' => $request->event,
            'date' => $request->date,
            'team_id' => $request->team_id,
            'description' => $request->description
        ]);
        
        return redirect('/events/details');
    }
    
    public function details()
    {
        $events = Events::all();
        return view('eventdet', compact('events'));
    }

    public function delete($id)
    {
        Events::where('id_event','like', $id)->delete();
	    return redirect('/events/details');
    }

    public function edit($id)
    {
        $event = Events::where('id_event','like', $id)->get();
        return view('evented', compact('event'));
    }

    public function update(Request $request)
    {
        Events::where('id_event',$request->id)->update([
            'event' => $request->event,
            'date' => $request->date,
            'team_id' => $request->team_id,
            'description' => $request->description
        ]);
        return redirect('/events/details');
    }
    
}
