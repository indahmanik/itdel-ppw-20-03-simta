<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Messages;
use App\Models\Users;

class MessagesController extends Controller
{
    public function messages()
    {
        return view('/messages');
    }

    public function sendMessages(Request $request)
    {
        Messages::create([
            'textID' => $request->textID,
            'text' => $request->text
        ]);
        
        return redirect('/messages');
    }

    public function search(Request $request)
    {
		$search = $request->search;
        $user= Users::where('name','like',"%".$search."%")->get();
        return view('messages', compact('user'));
    }
}