<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- css bootstrap --}}
    <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- js bootstrap --}}
    <script src="{{  asset('bootstrap-5/js/bootstrap.min.js') }}" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Blog | Update Posts</title>
</head>
<body>
    <h1>Update Posts</h1>
    <form method="post" action="{{ url("posts/$post->id") }}" class="form-control">
        @method('patch')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
          </div>
          <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" rows="3" name="content">{{ $post->content }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <form method="post" action="{{ url("posts/$post->id") }}" >
        @method('delete')
        @csrf
        <button type="Submit" class="btn btn-danger">Hapus</button>
    </form>
</body>
</html>
