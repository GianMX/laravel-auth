@extends('layout.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>{{$post->title}}</h2>

        <div >
          <img src="{{ $post->image_path}}" alt="image">
        </div>
          <p>{{$post->content}}</p>
      </div>
    </div>
  </div>
  @endsection
