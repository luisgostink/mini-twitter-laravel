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

    public function show($id){
        $tweet = Tweet::find($id); 
        return view('tweets.show', [
            'tweet'=> $tweet
        ]);
    }
}
