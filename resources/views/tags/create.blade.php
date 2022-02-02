<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Tag create</title>
</head>
<body>
    <div class="container">
        <h3>Tag Create</h3>
        <form action="{{route('tags.index')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Tag Name</label>
                <input id="name" type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Tag Description</label>
                <textarea id="description" type="text" name="description" class="form-control" rows="5" >
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tag Submit </button>
        </form>

    </div>

</body>
</html>