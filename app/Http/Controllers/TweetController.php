<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet; 


class TweetController extends Controller
{
    public function index(){

        // Get tweets from the DataBase
        $tweets = Tweet::all(); 

        // Send Data from all tweets in the DB to the View
        return view('tweets.index', [
            'tweets' => $tweets
        ]);  
    }

    public function create(){
        return view('tweets.create');
    }
    
    // STORE TWEET

    public function store(Request $request){
        
        // 1. Pulling the tweet to put it in the DB. 
        $request->title;
        $request->text;

        Tweet::create([
            "title" => $request['title'],
            "text" => $request['text']
        ]);



        //2. redirect to index route 

    }

    // Show selected tweet, getting the ID from the database. 

    public function show($id){
        $tweet = Tweet::find($id); 
        return view('tweets.show', [
            'tweet'=> $tweet
        ]);
    }
}
