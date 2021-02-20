<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Artifacts;
use App\Models\Users;
use App\Models\Teams;

class SettingsmController extends Controller
{
    public function settings()
    {
        $team = Teams::where('nim', 'like', (session('user_id')))->first();
        $Artefakk = Artifacts::where('team_id', 'like', ($team->team_id))->get();
        $stu = Students::where('name', 'like', (session('username')))->first();
        $users = Users::where('name', 'like', (session('username')))->first();
        return view('settingsm', compact('stu','users','team', 'Artefakk'));
    }

    public function search(Request $request)
    {
        $stu = Students::where('name', 'like', (session('username')))->first();
        $users = Users::where('name', 'like', (session('username')))->first();
		$search = $request->search;
        $team = Teams::where('nim', 'like', (session('user_id')))->first();
        $Artefakk = Artifacts::where('team_id', 'like', ($team->team_id))->where('title','like',"%".$search."%")->get();
        return view('settingsm', compact('team','Artefakk','stu','users'));
    }

    public function edit($id)
    {
        //$events = Events::where('id_event','like', $id)->get();
        return view('editpass');
    }

    public function updatepass(Request $request)
    {
        $users = Users::where('name', 'like', (session('username')))->first();
        if($users->password == $request->current)
        {
            if($request->new == $request->confirm)
            {
                Users::where('name', 'like', (session('username')))->update([
                    'password' => $request->new
                ]);
                return redirect('/settingsm')->with('message','Password change is successful');
            }
            return redirect('/settingsm/password/edit/{id}')->with('message','Your new password did not match!');
        }
        return redirect('/settingsm/password/edit/{id}')->with('message','Wrong current password!');
    }
    
    public function cancel()
    {
        $team = Teams::where('nim', 'like', (session('user_id')))->first();
        $Artefakk = Artifacts::where('team_id', 'like', ($team->team_id))->get();
        $stu = Students::where('name', 'like', (session('username')))->first();
        $users = Users::where('name', 'like', (session('username')))->first();
        return view('settingsm', compact('stu','users','team', 'Artefakk'));
    }
    
    public function editpass(Request $request, $id)
    {
        $users = Users::find($id);
        if($users->password == $request->current)
        {
            if($request->new == $request->confirm)
            {
                $users->password = $request->new;
                $users->save();
                return ('Password change is successful');
            }
            return ('Your new password did not match!');
        }
        return ('Wrong current password!');
    }  
}
