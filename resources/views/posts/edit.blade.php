@extends('layouts.default')

@section('title', 'Title')

@section('description', 'Description')

@section('content')
<h1>
    <a href="{{ url('/') }}" class="pull-right fs12">Back</a>
    Edit Post
</h1>
<form method="post" action="{{ url('/posts', $post->id) }}">
    {{ csrf_field() }}
    {{ method_field('patch') }}
    <p>
        <input type="text" name="title" placeholder="title" value="{{ old('title', $post->title) }}">
        @if ($errors->has('title'))
        <span class="error">{{ $errors->first('title') }}</span>
        @endif
    </p>
    <p>
        <textarea name="body" placeholder="body">{{ old('body', $post->body) }}</textarea>
        @if ($errors->has('body'))
        <span class="error">{{ $errors->first('body') }}</span>
        @endif
    </p>
    <p>
        <input type="text" name="summary" placeholder="summary" value="{{ old('summary', $post->summary) }}">
        @if ($errors->has('summary'))
        <span class="error">{{ $errors->first('summary') }}</span>
        @endif
    </p>
    <p>
        <input type="submit" value="Edit Post">
    </p>

</form>
<form action="{{ action('PostsController@destroy', $post->id) }}" id="form_{{ $post->id }}" method="post" style="display:inline">
    {{ csrf_field() }}
    {{ method_field('delete') }}
    <a href="#" data-id="{{ $post->id }}" onclick="deletePost(this);" class="fs12">[x]</a>
</form>
<script>
function deletePost(e) {
  'use strict';

  if (confirm('are you sure?')) {
    document.getElementById('form_' + e.dataset.id).submit();
  }
}
</script>
@endsection
