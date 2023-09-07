<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return view('index');

    }
    public function feed(){
        $feeds = Feed::all();


        return view('pages.feed')->with('feeds' , $feeds);
    }
    public function addFeed(){
        
    }
}
