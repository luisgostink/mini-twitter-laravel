@extends('layouts.app')
@section ('title', 'view tweet')
@section('content')

  <div class="tweet-container">
      <h3>{{ $tweet->title }}</h3>
      <p>{{ $tweet->text }}</p>

      <form action="{{ route('tweets.destroy', $tweet) }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
      </form>
  </div>
@endsection


