<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index() {
    $postList = Post::orderby('id', 'desc')->get();
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

    return redirect()->route('posts.index')->with('message', '投稿が追加されました！');
  }

  public function show(Post $post) {
    return view('posts.show', compact('post'));
  }

  public function edit(Post $post){
    return view('posts.edit', compact('post'));
  }


  public function update(Request $request, Post $post) {
    $request->validate([
      'title' => 'required|max:100',
      'content' => 'required'
    ]);

    $post->title = $request->input('title');
    $post->content = $request->input('content');
    $post->save();

    return redirect()->route('posts.index')->with('message', '投稿が更新されました！');
  }
}
