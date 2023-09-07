<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedsController extends Controller
{
    public function store(Request $request){    
        $incomingFields = $request->validate([
            'content'=>'required'
        ]);
        $user_id = Auth()->user()->id;

        $incomingFields['content'] = strip_tags($incomingFields['content']);

        Feed::create([
            'content'=>$incomingFields['content'],
            'user_id'=>$user_id
        ]);

        return redirect()->route('feedsPage');
    }

    public function destroy(int $id){
        $feed = Feed::find($id);
        if ($feed) {
            $user_id = $feed->user->id;
            $feed->delete();
            // You can perform additional actions here, such as redirects or notifications.
            return redirect()->back()->with('success', 'Feed deleted successfully');
        } else {
            // Handle the case where the feed doesn't exist.
            return redirect()->back()->with('error', 'Feed not found');
        }
    }

    public function update(Request $request){

    }

    public function show(int $id){

    }
}
