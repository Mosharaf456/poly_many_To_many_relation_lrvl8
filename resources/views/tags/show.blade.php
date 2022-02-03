<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Tag Show </title>
</head>
<body>
    <div class="container">
    <h1>Tag Show</h1>

    <dl>
        <dt>{{$tag->name}}</dt>
        <dd>{{$tag->description}}</dd>

    </dl>

    <hr>
    {{-- Vedio lists --}}
    <table class="table">
        <h1>Video Lists</h1>
        <tr>
            <th>#id</th>
            <th>File Path</th>
            <th>Url</th>
            <th>created_at</th>
        </tr>
        @foreach($tag->videos as $video)
        <tr>
            <td>{{ $video->id }}</td>
            <td>{{ $video->file_path }}</td>
            <td>{{ $video->url }}</td>
            <td>{{ $video->created_at->tz('6.00') }}</td>
        </tr>
        @endforeach


         {{-- Post lists --}}
    
    <table class="table">
        <h1>Post Lists</h1>
        <tr>
            <th>@id</th>
            <th>Title</th>
        </tr>
        @foreach($tag->posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
        </tr>
        @endforeach
    </table>

</div>

</body>
</html>