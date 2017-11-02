@extends('layouts.default')

@section('title', 'Title')

@section('description', 'Description')

@section('content')
<h1>
    <a href="{{ url('/') }}" class="pull-right fs12">Back</a>
    Add New
</h1>
<form method="post" action="{{ url('/posts') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <p>
        <input type="text" name="title" placeholder="title" value="{{ old('title') }}">
        @if ($errors->has('title'))
        <span class="error">{{ $errors->first('title') }}</span>
        @endif
    </p>
    <p>
        <textarea name="body" placeholder="body">{{ old('body') }}</textarea>
        @if ($errors->has('body'))
        <span class="error">{{ $errors->first('body') }}</span>
        @endif
    </p>
    <p>
        <input type="text" name="summary" placeholder="summary" value="{{ old('summary') }}">
        @if ($errors->has('summary'))
        <span class="error">{{ $errors->first('summary') }}</span>
        @endif
    </p>
    <p>
        <label>アップロード</label>
        <input id="image" type="file" name="image">
        @if ($errors->has('image'))
        <span class="error">{{ $errors->first('image') }}</span>
        @endif
    </p>
    <p>
        <input type="submit" value="Add New">
    </p>
</form>
@endsection
