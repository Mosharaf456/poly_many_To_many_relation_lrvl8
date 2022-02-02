<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Polymorphic manyTOmany </title>
</head>
<body>
    <div class="container">
        <h3>Comments List</h3>
        {{-- table>tr>th*4 
             tr>td*4
            --}}
        <table class="table">
            <tr>
                <th>@id</th>
                <th>Comment Messages:</th>
                <th>Type (Post / Video)</th>
                <th>ID (Post / Video)</th>
            </tr>
             @foreach ($comments as $comment)
             <tr>
                <td>{{$comment->id}}</td>
                <td>{{$comment->comment_body}}</td>
    
                <td>{{ $comment->commentable_type }} </td>
                <td>{{ $comment->commentable_id}}</td>
              </tr>
                 
             @endforeach
        </table>
    </div>

</body>
</html>