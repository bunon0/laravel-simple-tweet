<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index() {
    $articleList = Post::all();
    return view('posts.index', ['articleList' => $articleList]);
  }

  public function create() {
    return view('posts.create');
  }

  public function store(Request $request) {
    $request->validate([
      'title' => 'required|max:100',
      'text' => 'required'
    ]);

    $post = new Post;
    $post->title = $request->input('title');
    $post->content = $request->input('content');
    $post->save();
  }
}
