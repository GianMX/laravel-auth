@extends('layout.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Welcome </h2>

        <ul>
          @foreach ($posts as $post)
            <li>{{ $post->title}}
              <div>
                <a class="btn btn-primary" href="{{route('posts.show', $post)}}">Read now</a>
              </div>
            </li>

          @endforeach
        </ul>
      </div>
    </div>
  </div>
  @endsection
