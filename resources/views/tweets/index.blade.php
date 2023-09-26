@extends('layouts.app')
@section ('title', 'feed')
@section('content')

    <div class="feed-title">
      <p>FEED FROM</p>
      <span>Luis Gostin</span>
    </div>    

    @foreach ($tweets as $tweet) 
    <div class="tweet-container"> 
        <p class="date">{{ date('d.m.y', strtotime($tweet->created_at)) }}</p>
        <h3>{{ $tweet->title }}</h3>
        <p>{{ $tweet->text }}</p>
        <a href="/tweets/{{$tweet->id}}" class="view-more">View more</a>
    </div>
    @endforeach
@endsection

  
  



















