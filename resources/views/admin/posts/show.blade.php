@extends('layout.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>{{$post->title}}</h2>

        <div>
          <h3>Author</h3>
          <ul>
            <li>Nome {{$post->user->name}} </li>
            <li>Email {{$post->user->email}}</li>
          </ul>
        </div>
        <img src="{{ $post->image_path }}" alt="image">

        <p>{{ $post->content}}</p>
      </div>
    </div>
  </div>
  @endsection
