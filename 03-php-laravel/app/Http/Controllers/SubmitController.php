<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artifacts;
use App\Models\Users;
use App\Models\Students;

class SubmitController extends Controller
{

    public function submit(){     
        $stu = Students::where('name', 'like', (session('username')))->first();
        return view('submit', compact('stu'));
    }

    public function addsubmit(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:docs,doc,txt,xlx,xls,pdf|max:2048'
        ]);

        $artifacts = new Artifacts;

        if($request->file()) {
            $fileName = $request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

            $artifacts->filename = $request->file->getClientOriginalName();
            $artifacts->team_id = $request->team_id;
            $artifacts->major = $request->major;
            $artifacts->title = $request->title;
            $artifacts->save();

            return redirect('/upload');
        }
    }

    function post(Request $request){
        $artifacts = new Artifacts;
        $artifacts->administration_id = $request->administration_id;
        $artifacts->team_id = $request->team_id;
        $artifacts->filename = $request->filename;
        $artifacts->major = $request->major;
        $artifacts->title = $request->title;
    
        $artifacts->save();
    
        return response()->json(
                [
                    "message" => "Success",
                    "data" => $artifacts
                ]
            );
        }
    
}
