@extends('layouts.app')
@section ('title', 'new tweet')
@section('content')

<div>
   {{--action => route // method => POST--}}
    <form action="/tweets/store" method="POST">
        @csrf 
        <label for="username">Title:</label>
        <input class="@error('title') is-invalid @enderror" type="text" id="username" name="title"><br>
        

        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="tweet_content">Tweet Content:</label>
        <textarea class="@error('text') is-invalid @enderror" id="tweet_content" name="text" rows="4" cols="50"></textarea><br>

        @error('text')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit">Create Tweet</button>
    </form>

   

</div>
@endsection