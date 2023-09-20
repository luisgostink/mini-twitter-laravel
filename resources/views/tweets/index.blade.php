    <div>
      @foreach ($tweets as $tweet)
          <p>{{ $tweet->title }}</p>
          <p>{{ $tweet->text }}</p>
      @endforeach
    </div>
