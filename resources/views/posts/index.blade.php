<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <h1>Blog Widyatama</h1>



    <div>
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
