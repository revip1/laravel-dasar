@extends('layouts.app')
@section('title', 'New Post')

@section('content')
    <h1>Create New Posts</h1>
    <form method="post" action="{{ url('posts') }}" class="form-control">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>
          <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" rows="3" name="content"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    @endsection
