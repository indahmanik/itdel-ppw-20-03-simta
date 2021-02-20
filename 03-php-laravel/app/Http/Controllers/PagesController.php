<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Users;
use App\Models\Artifacts;
use App\Models\Students;
use App\Models\Tasks;
use App\Models\Events;
use App\Models\Teams;
use App\Models\Supervisors;
use App\Models\Examiners;

class PagesController extends Controller
{
    public function home()
    {
        if(!Session::get('login'))
        {
            return redirect('');
        }
        if(!session('role') == 1)
        {
            return redirect('')->with('message','Anda harus login menggunakan akun mahasiswa!');
        }
        $stu = Students::where('name', 'like', (session('username')))->first();
        $team = Teams::where('nim', 'like', (session('user_id')))->first();
        $teammem = Teams::where('team', 'like', ($team->team))->get();
        $tasks = Tasks::where('team_id', 'like', ($team->team_id))->get();
        $exam = Examiners::where('team', 'like', ($team->team))->get();
        $sup = Supervisors::where('team', 'like', ($team->team))->get();
        return view('index', compact('stu', 'team', 'teammem', 'tasks', 'sup', 'exam'));
    }

    public function homed()
    {
        if(!Session::get('login'))
        {
            return redirect('');
        }
        if(!session('role') == 0)
        {
            return redirect('')->with('message','Anda harus login menggunakan akun dosen!');
        }
        $sup = Supervisors::where('nip', 'like', (session('user_id')))->first();
        $teamsup = Teams::where('team', 'like', ($sup->team))->first();
        $teams = Teams::where('team', 'like', ($sup->team))->get();
        $eventsup = Events::where('team_id', 'like', ($teamsup->team_id))->get();

        $exam = Examiners::where('nip', 'like', (session('user_id')))->first();
        $teamex = Teams::where('team', 'like', ($exam->team))->first();
        $teame = Teams::where('team', 'like', ($exam->team))->get();
        $eventex = Events::where('team_id', 'like', ($teamex->team_id))->get();
        return view('indexd', compact('sup', 'exam', 'teams', 'teame', 'teamsup', 'teamex', 'eventsup', 'eventex'));
    }

    public function homek()
    {
        if(!Session::get('login'))
        {
            return redirect('');
        }
        $artefak= Artifacts::all();
        return view('indexk', compact('artefak'));
    }

    public function artefak()
    {
        $artefak= Artifacts::where('views', 'like', 'Public')->get();
        return view('artefak', compact('artefak'));
    }
    
    public function search(Request $request)
    {
		$search = $request->search;
        $artefak= Artifacts::where('views', 'like', 'Public')->where('title','like',"%".$search."%")->get();
        return view('artefak', compact('artefak'));
    }
    
    public function artefakd()
    {
        $artefak= Artifacts::all();
        return view('artefakd', compact('artefak'));
    }

    public function searchd(Request $request)
    {
		$search = $request->search;
        $artefak= Artifacts::where('title','like',"%".$search."%")->get();
        return view('artefakd', compact('artefak'));
    }

    public function publicarct()
    {
        $artefak= Artifacts::where('views', 'like', 'Public')->get();
        return view('public', compact('artefak'));
    }

    public function searchp(Request $request)
    {
		$search = $request->search;
        $artefak= Artifacts::where('views', 'like', 'Public')->where('title','like',"%".$search."%")->get();
        return view('public', compact('artefak'));
    }

    public function view($id)
    {
        $artefak= Artifacts::find($id);
        return view('pdf', compact('artefak'));
    }

    public function login()
    {
        return view('login');
    }

    public function auth(Request $request){
        $data = Users::where('username', $request->username)->first();
        if($data)
        {
            if($data->password == $request->password)
            {
                session(['authenticated' => true]);
                $request->session()->put('username', $data['name']);
                $request->session()->put('role', $data['role']);
                $request->session()->put('user_id', $data['user_id']);
                Session::put('login',true);
                if(session('role') == 1)
                {
                    return redirect('index');
                }
                if(session('role') == 2)
                {
                    return redirect('indexk');
                }
                return redirect('indexd');
            }
        }
        return redirect('')->with('message','Wrong Username or Password!'); 
    }

    public function logout(){
        session()->pull('username');
        Session::flush();
        return redirect('');
    }

    public function index($id)
    {
        $team = Teams::where('nim', 'like', ($id))->first();
        $stu = Students::where('nim', 'like', ($id))->first();
        
        //return Teams::where('team', 'like',($team->team))->get(['team', 'nim', 'name']);
        //return Students::where('nim', 'like',($stu->nim))->get(['name', 'batch', 'email']);
        return Tasks::where('team_id', 'like',($team->team_id))->get(['name_task', 'due_date', 'submission_status']);
        //return Examiners::where('teamid', 'like',($team->team))->get(['nip', 'fullname']);
        //return Supervisors::where('teamid', 'like',($team->team))->get(['nip', 'fullname']);
    }

    public function authenticating(Request $request){
        $data = Users::where('username', $request->username)->first();
        if($data)
        {
            if($data->password == $request->password)
            {
                return ('Login success!');
            }
        }
        return ('Wrong Username or Password!'); 
    }

    public function show($id)
    {
        return Users::where('user_id', 'like',($id))->get(['user_id', 'username', 'name', 'role']);
    }
    
    public function userlogout()
    {
        return ('Logout success!');
    }
}
