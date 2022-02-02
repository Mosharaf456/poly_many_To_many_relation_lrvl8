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
        <h3>Vedios Create</h3>
        <form action="/videos" method="post">
            @csrf
            <div class="form-group">
                <label for="url">Url</label>
                <input id="url" type="text" name="url" class="form-control">
            </div>
            <div class="form-group">
                <label for="file_path">Videos Path</label>
                <input id="file_path" type="text" name="file_path" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="tags">Select Tags</label>
                <select   name="tags[]" class="form-control" multiple>
                    {{-- <option value="">Select tags</option> --}}
                    @foreach ($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                    @endforeach
                </select>
            </div>
             
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</body>
</html>