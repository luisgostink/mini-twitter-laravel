
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mini Twitter from Luis Gostin</title>

  @vite('resources/css/app.css')
</head>







<body>

  <div>
    <h1>Mini Twitter</h1>
  </div>
     
     
  @foreach ($tweets as $tweet)
  <div class="tweet-container">
      <h3>{{ $tweet->title }}</h3>
      <a href="/tweets/{{$tweet->id}}">See more</a>
      <p>{{ $tweet->text }}</p>
  </div>
  @endforeach
  
  
</body>
</html>


















