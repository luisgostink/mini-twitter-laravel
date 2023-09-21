@extends('layouts.app')

@section('content')
    <div>
      <h1>Mini Twitter</h1>
    </div>
      
    @foreach ($tweets as $tweet)
    <div class="tweet-container">
        <h3>{{ $tweet->title }}</h3>
        <p>{{ $tweet->text }}</p>
        <a href="/tweets/{{$tweet->id}}">View more</a>
    </div>
    @endforeach
@endsection

  
  



















