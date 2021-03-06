<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Video Edit </title>
</head>
<body>
    <div class="container">
        <h3>Vedios Edit</h3>
        <form action="/videos/{{$video->id}}/" method="post">
            @csrf
            @method('patch')

            <div class="form-group">
                <label for="url">Url</label>
            <input id="url" type="text" name="url" class="form-control" value="{{ !empty(old('url')) ? old('url') : $video->url }}">
            </div>
            <div class="form-group">
                <label for="file_path">Videos Path</label>
                <input id="file_path" type="text" name="file_path" value="{{$video->file_path}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input id="date" type="Date" name="created_at" value="{{$video->created_at->format('Y-m-d')}}" class="form-control">
            </div>
            <div class="form-group">

                <label for="tags">Select Tags</label>
                {{-- 
                <select   name="tags[]" class="form-control" multiple>
                    @foreach ($tags as $tag)
                        <option value="{{$tag->id}}"
                            {{ $selected_tag->contains($tag->id) ? 'selected' : '' }}
                            >{{$tag->name}}</option>
                    @endforeach
                </select>
                --}}


                @foreach ($tags as $tag)
                    <input 
                    class="form-controll" 
                    type="checkbox" 
                    name="tags[]" 
                    value="{{$tag->id}}" 
                    {{ $selected_tag->contains($tag->id) ? 'checked' : '' }}
                    >{{$tag->name}}
                @endforeach
                
            </div>
             
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</body>
</html>