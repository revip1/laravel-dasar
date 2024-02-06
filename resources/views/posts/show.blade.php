<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- css bootstrap --}}
     <link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <link href="{{ asset('css/blog.css') }}" rel="stylesheet" crossorigin="anonymous">
     {{-- js bootstrap --}}
     <script src="{{  asset('bootstrap-5/js/bootstrap.min.js') }}" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Blog | Judul: {{ $post->title }}</title>
</head>
<body>
    <div class="container">
        <article class="blog-post">
            <h2 class="blog-post-title mb-1">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ date("d M Y H:i", strtotime($post->created_at)) }} </p>

            <p>{{ $post->content }}</p>

            <small class="text-muted">{{ $total_comments }} Komentar</small>
            @foreach ($comments as $comment)
                <div class="card mb-3">
                    <div class="card-body">
                        <p style="font-size: 8pt">{{ $comment->comment }}</p>
                    </div>
                </div>
            @endforeach

          </article>
          <a href="{{ url("posts") }}"><- Kembali</a>
    </div>
</body>
</html>
