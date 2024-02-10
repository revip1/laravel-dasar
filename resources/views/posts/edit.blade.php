@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
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
    @endsection
