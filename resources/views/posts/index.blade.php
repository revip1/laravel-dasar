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
    <title>Blog</title>
    <style>
        .blog {
            padding: 5px;
            border-bottom: 1px solid lightgrey;
        }
        small {
            color: grey;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Blog Widyatama</h1>
        <a class="btn btn-success" href="{{ url('posts/create') }}">+ Create new Post</a>
        @foreach ($posts as $post)
        @php($post = explode(',', $post))
        <div class="card mb-3">
            <div class="card mb-3">
                <div class="card-body">
                  <h5 class="card-title">{{ $post[1] }}</h5>
                  <p class="card-text">{{ $post[2] }}</p>
                  <p class="card-text"><small class="text-muted">Last updated at {{ date("d M Y H:i", strtotime($post[3])) }}</small></p>
                  <a href="{{ url("posts/$post[0]") }}" class="btn btn-primary">Selengkapnya</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</body>
</html>
