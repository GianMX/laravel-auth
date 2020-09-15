@extends('layout.app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Welcome {{ $user-> name}}</h2>

        <ul>
          @foreach ($posts as $post)
            <li>{{$post->user->name}} - {{ $post->title}}
              <div >
                <a class="btn btn-primary" href="{{ route('admin.posts.show', $post)}}">show me</a>
              </div>
            </li>

          @endforeach
        </ul>
      </div>
    </div>
  </div>
  @endsection
