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
}
