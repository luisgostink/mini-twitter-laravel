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
        
        // 1. Pulling the tweet, and validate it to put it in the DB

        $validated = $request->validate([
            'title' => 'required|max:50|min:5',
            'text' => 'required|max:150|min:5',
        ]);
    
        // The tweet is valid... 

        Tweet::create([
            "title" => $request['title'],
            "text" => $request['text']
        ]);



        // 2. redirect to index page 
        return redirect()->route('feed');

    }

    // Show selected tweet, getting the ID from the database. 
    public function show($id){
        $tweet = Tweet::find($id); 
        return view('tweets.show', [
            'tweet'=> $tweet
        ]);
    }

    // FUNCTION TO DELETE THE TWEET AND GO BACK TO THE MAIN PAGE.
    public function destroy($id)
{
    // Get tweet from the DB and saves it in the $tweet variable. 
    $tweet = Tweet::find($id); 
    $tweet->delete();

    // Go back to the feed page. 
    return redirect()->route('feed'); // Redirect to the tweets feed
    } 
}
