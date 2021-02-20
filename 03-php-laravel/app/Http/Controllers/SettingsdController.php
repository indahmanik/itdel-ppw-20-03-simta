<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\Artifacts;
use App\Models\Users;
use App\Models\Supervisors;

class SettingsdController extends Controller
{
    public function settings()
    {
        $Artefakk= Artifacts::all();
        $stu = Students::where('name', 'like', (session('username')))->first();
        $users = Users::where('name', 'like', (session('username')))->first();
        $sup = Supervisors::where('nip', 'like', (session('user_id')))->first();
        return view('settingsd', compact('stu','users','Artefakk','sup'));
    }

   

    public function search(Request $request)
    {
        $stu = Students::where('name', 'like', (session('username')))->first();
        $users = Users::where('name', 'like', (session('username')))->first();
        $sup = Supervisors::where('nip', 'like', (session('user_id')))->first();
		$search = $request->search;
        $Artefakk= Artifacts::where('title','like',"%".$search."%")->get();
        return view('settingsd', compact('stu','users','Artefakk','sup'));

    }

    public function editviewpub(Request $request, $id)
    {
        Artifacts::where('administration_id',$request->id)->update([
            'views' => 'Public',
            'status' => 'Final'
        ]);
        return redirect('/settingsd');
    }

    public function editviewpri(Request $request, $id)
    {
        Artifacts::where('administration_id',$request->id)->update([
            'views' => 'Private',
            'status' => 'Revisi'
        ]);
        return redirect('/settingsd');
    }

    public function delete($id)
    {
        Artifacts::where('administration_id','like', $id)->delete();
	    return redirect('/settingsd');
    }

    public function edit($id)
    {
        return view('editpassd');
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
                return redirect('/settingsd')->with('message','Password change is successful');
            }
            return redirect('/settingsd/password/edit/{id}')->with('message','Your new password did not match!');
        }
        return redirect('/settingsd/password/edit/{id}')->with('message','Wrong current password!');
    }
    
    public function cancel()
    {
        $Artefakk= Artifacts::all();
	    $stu = Students::where('name', 'like', (session('username')))->first();
        $users = Users::where('name', 'like', (session('username')))->first();
        $sup = Supervisors::where('nip', 'like', (session('user_id')))->first();
        return view('settingsd', compact('stu','users','Artefakk','sup'));
    }

    public function show($id)
    {
        return Artifacts::find($id);
    }

    public function update(Request $request, $id)
    {
        $us = Artifacts::find($id);
        $us->views = $request->views;
        $us->save();
        return $us;
    }
   
    public function destroy(Request $request, $id)
    {
        Artifacts::destroy($id);
        return Artifacts::all();
    }
       
    public function index()
    {
        return Artifacts::all();
    }
}
