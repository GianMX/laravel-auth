<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
      $posts = Post::All();

      return view('guests.posts.index', compact('posts'));
    }

    public function show(Post $post) {
      return view('guest.posts.show', compact('post'));
    }
}
