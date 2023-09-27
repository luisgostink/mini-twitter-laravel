@extends('layouts.app')
@section ('title', 'view tweet')
@section('content')

  <div class="tweet-container">
      <p class="date">{{ date('d.m.y', strtotime($tweet->created_at)) }}</p>
      <h3>{{ $tweet->title }}</h3>
      <p>{{ $tweet->text }}</p>

      <form action="{{ route('tweets.destroy', $tweet) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this tweet?');">Delete</button>
      </form>
  </div>
@endsection


