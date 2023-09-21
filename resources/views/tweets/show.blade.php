@extends('layouts.app')
  
@section('content')
  <div class="tweet-container">
      <h3>{{ $tweet->title }}</h3>
      <p>{{ $tweet->text }}</p>
  </div>
@endsection


