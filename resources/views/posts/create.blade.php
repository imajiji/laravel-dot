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
        <input type="text" name="link_url" placeholder="link_url" value="{{ old('link_url') }}">
        @if ($errors->has('link_url'))
        <span class="error">{{ $errors->first('link_url') }}</span>
        @endif
    </p>
    <p>
        <input type="text" name="img_url1" placeholder="img_url1" value="{{ old('img_url1') }}">
        @if ($errors->has('img_url1'))
        <span class="error">{{ $errors->first('img_url1') }}</span>
        @endif
    </p>
    <p>
        <input type="text" name="img_url2" placeholder="img_url2" value="{{ old('img_url2') }}">
        @if ($errors->has('img_url2'))
        <span class="error">{{ $errors->first('img_url2') }}</span>
        @endif
    </p>
    <p>
        <input type="text" name="img_url3" placeholder="img_url3" value="{{ old('img_url3') }}">
        @if ($errors->has('img_url3'))
        <span class="error">{{ $errors->first('img_url3') }}</span>
        @endif
    </p>
    <p>
        <input type="text" name="img_url4" placeholder="img_url4" value="{{ old('img_url4') }}">
        @if ($errors->has('img_url4'))
        <span class="error">{{ $errors->first('img_url4') }}</span>
        @endif
    </p>
{{--     <p>
        <label>アップロード</label>
        <input id="image" type="file" name="image">
        @if ($errors->has('image'))
        <span class="error">{{ $errors->first('image') }}</span>
        @endif
    </p> --}}
    <p>
        <input type="submit" value="Add New">
    </p>
</form>
@endsection
