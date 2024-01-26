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
        @php($number = 1)
        @foreach ($posts as $post)
        <div class="blog">
            <h3><small>#{{ $number }}</small> {{ $post[0] }} </h3>
            <p>{{ $post[1] }}</p>
        </div>
            @php($number++)
        @endforeach
    </div>
</body>
</html>
