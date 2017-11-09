@extends('layouts.default')

@section('title', 'Title')

@section('description', 'Description')

@section('content')
<section class="MOD_FEATURE">
  <div data-layout="_r">
    @forelse ($posts as $post)
    <div data-layout="ch8 ec4">
      <a href="{{ action('PostsController@show', $post->post_id) }}" class="MOD_FEATURE_Container">
        <img class="MOD_FEATURE_Picture" src="{{ asset('storage/'.$post->path) }}" alt="">
        <div class="MOD_FEATURE_TextContainer">
          <p class="MOD_FEATURE_Title" data-theme="_ts2">{{$post->title}}</p>
          <p class="MOD_FEATURE_Description">{{$post->body}}</p>
        </div>
      </a>
    </div>
    @empty
    <div data-layout="ch8 ec4">
      <a href="{{ action('PostsController@show', $post->id) }}" class="MOD_FEATURE_Container">
        <img class="MOD_FEATURE_Picture" src="https://unsplash.it/400/300/" alt="">
        <div class="MOD_FEATURE_TextContainer">
          <p class="MOD_FEATURE_Title" data-theme="_ts2">{{$post->title}}</p>
          <p class="MOD_FEATURE_Description">{{$post->body}}</p>
        </div>
      </a>
    </div>
    @endforelse
  </div>
</section>
@endsection