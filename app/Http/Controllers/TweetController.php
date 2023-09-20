<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet; 


class TweetController extends Controller
{
    public function index(){

        // Get teets from the DataBase
        $tweets = Tweet::all(); 


        // Send Data in the View
        return view('tweets.index');  
    }

    public function create(){
        return view('tweets.create', [
            'tweets'=> $tweets
        ]);
    }

    public function show(){
        return view('tweets.show');
    }
}
