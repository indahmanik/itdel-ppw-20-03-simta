<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Forums;
use App\Models\Users;
use App\Models\Comments;

class ForumController extends Controller
{
    public function forum()
    {
        return view('/forum');
    }

    public function mForum()
    {
        return view('/mForum');
    }

    public function diskusi()
    {
        return view('/diskusi');
    }

    public function comment(){     
        $cmt = Users::where('name', 'like', (session('username')))->first();
        return view('comment', compact('cmt'));
    }

    public function formForum(){     
        $ffm = Users::where('name', 'like', (session('username')))->first();
        return view('addForum', compact('ffm'));
    }

    public function addForum(Request $request)
    {
        Forums::create([
            'id' => $request->id,
            'team_id' => $request->team_id,
            'title' => $request->title,
            'comment' => $request->comment,
            'date_created' => $request->date_created,
            'creator' => $request->creator
        ]);
        return redirect('/forum')->with('message','Forum Created.');
    }

    public function addComment(Request $request)
    {
        Comments::create([
            'nomor_induk' => session('user_id'),
            'name' => session('username'),
            'comment' => $request->comment,
            'date' => $request->date
        ]);
        
        return redirect('/forum/diskusi')->with('message','Adding Comment is successful');
    }
    
    function put($id, Request $request)
    {
        $forum = Forums::where('id', $id)->first();
        if($forum){
            $forum->team_id = $request->team_id ? $request->team_id : $forum->team_id;
            $forum->title = $request->title ? $request->title : $forum->title;
            $forum->comment = $request->comment ? $request->comment : $forum->comment;
            $forum->date_created = $request->date_created ? $request->date_created : $forum->date_created;
            $forum->creator = $request->creator ? $request->creator : $forum->creator;

            $forum->save();
            return response()->json(
                [
                    "message" => "Forums Updated.",
                    "data" => $forum
                ]
            );
        }
        return response()->json(
            [
                "message" => "Forum with id " . $id . " not found"
            ], 404
        );
    }

    public function show($id)
    {
        return Forums::find($id);
    }

    public function update(Request $request, $id)
    {
        $fm = Forums::find($id);
        $fm->update($request->all());
        return $fm;
    }

    public function destroy(Request $request, $id)
    {
        return Forums::destroy($id);
    }

    public function post(Request $request){
        $forum = new Forums;
        $forum->id = $request->id;
        $forum->team_id = $request->team_id;
        $forum->title = $request->title;
        $forum->comment = $request->comment;
        $forum->date_created = $request->date_created;
        $forum->creator = $request->creator;
    
        $forum->save();
    
        return response()->json(
                [
                    "message" => "Success",
                    "data" => $forum
                ]
            );
    }

    function get()
    {
        $data = Forums::all();
        return response()->json(
            [
                "message" => "Success",
                "data" => $data
            ]
        );
    }

    function getById($id)
    {
        $data = Forums::where('id', $id)->get();
        return response()->json(
            [
                "message" => "Success",
                "data" => $data
            ]
        );
    }
}
