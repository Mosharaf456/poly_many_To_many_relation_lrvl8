<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Single Post from index page </title>
</head>
<body>
    <div class="container">
        <h1>Single Post  List</h1>        
            <h5>{{$post->id}}</h5>
            <p> {{$post->title}} </p>

            <hr>
            <h3>Comments</h3>
            <ul>
                @foreach ($post->comments as $comment)
                    <li>{{ $comment->comment_body }}</li>
                @endforeach
            </ul>
            <hr>

            <form action="/posts/{{$post->id}}/comments" method="post">
                @csrf
    
                <div class="form-group">
                    <label for="comment">Your Comment</label>
                    <textarea id="comment" type="text" name="comment_body" class="form-control" rows="7"> </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </form>
            
    </div>

</body>
</html>