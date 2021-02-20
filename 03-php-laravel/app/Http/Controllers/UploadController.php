<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Tasks;
use App\Models\Teams;
use App\Models\Students;
use App\Models\Users;

class UploadController extends Controller
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
        return view('upload', compact('stu', 'team', 'teammem', 'tasks'));
    }

    function get()
    {
        $data = Tasks::all();
        return response()->json(
            [
                "message" => "Success",
                "data" => $data
            ]
        );
    }

    function getById($id)
    {
        $data = Tasks::where('team_id', $id)->get();
        return response()->json(
            [
                "message" => "Success",
                "data" => $data
            ]
        );
    }
}
