@extends('layouts.app')

@section('content')
<div>
    <h1>Mini Twitter</h1>
</div>

<div>
   {{--action => route // method => POST--}}
    <form action="/tweets/store" method="POST">
        @csrf 
        <label for="username">Title:</label>
        <input type="text" id="username" name="title" required><br><br>

        <label for="tweet_content">Tweet Content:</label>
        <textarea id="tweet_content" name="text" rows="4" cols="50" required></textarea><br><br>

        <button type="submit">Create Tweet</button>
    </form>
</div>
@endsection