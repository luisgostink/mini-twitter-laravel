   
   
   
   
   
   <div class="tweet-container">
      @foreach ($tweets as $tweet)
          <h3>{{ $tweet->title }}</h3>
          <p>{{ $tweet->text }}</p>
      @endforeach
    </div>
