<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Tag Index </title>
</head>
<body>
    <div class="container">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div> 
    @endif
        <h3>Tag List</h3>
        {{-- table>tr>th*4 
             tr>td*4
            --}}
        <table class="table">
            <tr>
                <th>@id</th>
                <th>Tag Name</th>
                <th>Tag Description</th>
                <th>Action</th>
            </tr>
             @foreach ($tags as $tag)
             <tr>
                <td>{{$tag->id}}</td>
                <td>
                    <a href="/tags/{{$tag->name}}">{{$tag->name}}</a>
                </td>
                <td>{{$tag->description}}</td>
                {{-- <td>
                    <a href="/tags/{{$tag->id}}">Show</a>
                </td> --}}
              </tr>
                 
             @endforeach
        </table>
    </div>

</body>
</html>