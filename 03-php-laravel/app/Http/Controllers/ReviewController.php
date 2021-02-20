<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reviews;
use App\Models\Artifacts;
use App\Models\Supervisors;
use App\Models\Users;

class ReviewController extends Controller
{
    public function review(){     
        $sup= Supervisors::where('name', 'like', (session('username')))->first();
        return view('review', compact('sup'));
    }

    public function addreview(Request $request)
    {
        Reviews::create([
            'prof_name' => session('username'),
            'team_id' => $request->team_id,
            'title' => $request->title,
            'text_review' => $request->text_review
        ]);
        return redirect('/reviewdoc');   
    }   

    public function view($id)
    {
        $artefak = Artifacts::find($id);
        return view('pdf', compact('artefak'));
    }
    
    public function index()
    {
        return Reviews::all();
    }

    public function store(Request $request)
    {
        return Reviews::create($request->all());
    }

    public function show($id)
    {
        return Reviews::find($id);
    }
}


