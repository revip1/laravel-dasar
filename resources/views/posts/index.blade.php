@extends('layouts.app')

@section('title')
    Welcome
@endsection

@section('content')
        <h1>Blog Widyatama
        <a class="btn btn-success" href="{{ url('posts/create') }}">+ Create new Post</a>
    </h1>
        @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card mb-3">
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p class="card-text">{{ $post->content }}</p>
                  <p class="card-text"><small class="text-muted">Last updated at {{ date("d M Y H:i", strtotime($post->created_at)) }}</small></p>
                  <a href="{{ url("posts/$post->id") }}" class="btn btn-primary">Selengkapnya</a>
                  <a href="{{ url("posts/$post->id/edit") }}" class="btn btn-warning">Edit</a>
                </div>
              </div>
        </div>
        @endforeach
@endsection
