<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index() {
    $postList = Post::all();
    return view('posts.index', ['postList' => $postList]);
  }

  public function create() {
    return view('posts.create');
  }

  public function store(Request $request) {
    $request->validate([
      'title' => 'required|max:100',
      'content' => 'required'
    ]);

    $post = new Post;
    $post->title = $request->input('title');
    $post->content = $request->input('content');
    $post->save();

    return redirect()->route('posts.index')->with('message', '投稿が追加されました');
  }

  public function show(Post $post) {
    return view('posts.show', compact('post'));
  }
}
