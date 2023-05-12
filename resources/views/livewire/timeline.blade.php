<div>
    @foreach($tweets as $tweet)
        <p>User: {{$tweet->user}}</p>
        <p>{{$tweet->body}}</p>
    @endforeach
</div>
