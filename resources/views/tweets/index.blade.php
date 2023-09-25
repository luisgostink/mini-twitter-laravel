@extends('layouts.app')
@section ('title', 'feed')
@section('content')

    <div class="feed-title">
      <p>FEED FROM</p>
      <span>Luis Gostin</span></p>
    </div>    

    @foreach ($tweets as $tweet)
    <div class="tweet-container">
        <h3>{{ $tweet->title }}</h3>
        <p>{{ $tweet->text }}</p>
        <a href="/tweets/{{$tweet->id}}" class="tweet-info">View more</a>
    </div>
    @endforeach
@endsection

  
  



















