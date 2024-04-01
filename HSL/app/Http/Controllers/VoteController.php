<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{

    public function index(Request $request)
    {
        $voted = $request->cookie('voted');
        if ($voted) {
            $vote = Vote::where('id', '>', $voted)->first();
        } else {
            $vote = Vote::first();
        }

        return view('index', compact('vote'));
    }

    public function voteJoke(Request $request)
    {
        $input = $request->all();
        $vote = Vote::find($input['id']);
        $vote->total_vote += 1;
        if ($input['type'] == 'like') {
            $vote->like += 1;
        } else {
            $vote->dislike += 1;
        }
        $vote->save();
        $cookie = cookie('voted', $vote->id, null);

        return redirect()->route('index')->cookie($cookie);
    }
}
