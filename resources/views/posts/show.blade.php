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
    <title>Blog | Judul: Title</title>
</head>
<body>
    <div class="container">
        <article class="blog-post">
            <h2 class="blog-post-title mb-1">Sample blog post</h2>
            <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>

            <p>Ini Kontennya</p>
          </article>
    </div>
</body>
</html>
