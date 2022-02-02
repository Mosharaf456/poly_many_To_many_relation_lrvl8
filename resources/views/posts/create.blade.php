<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Posts create Polymorphic manyTOmany </title>
</head>
<body>
    <div class="container">
        <h3>Posts Create</h3>
        <form action="/posts" method="post">
            @csrf
            <div class="form-group">
                <label for="title">title</label>
                <input id="title" type="text" name="title" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Posts Create </button>
        </form>

    </div>

</body>
</html>