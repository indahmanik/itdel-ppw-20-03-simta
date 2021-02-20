<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function jadwal()
    {
        return view('/addJadwal');
    }

    public function addJadwal(){
        return view('addJadwal');
    }

    public function jadwalProses(Request $req){
        $data = $req->input();
        Jadwal::create([
            'day' => $data['day'],
            'schedule' => $data['schedule'],
            'location' => $data['location'],
            'lecturer' => $data['lecturer'],
        ]);
        return redirect('/addJadwal');
    }
}


