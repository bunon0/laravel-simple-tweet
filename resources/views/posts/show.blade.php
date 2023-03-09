@extends('layouts.app')

@section('title', '投稿詳細 | 投稿アプリ')

@section('main-content')
  <h2>投稿詳細</h2>
  <a href="{{ route('posts.index') }}" class="btn btn-link">&lt;戻る</a>
  <div class="card mt-3">
    <div class="card-body">
      <h5 class="card-title">{{ $post->title }}</h5>
      <p class="card-text">{{ $post->content }}</p>
      <a href="#" class="btn btn-outline-primary ms-1">編集</a>
      <a href="#" class="btn btn-outline-danger ms-1">削除</a>
    </div>
  </div>
@endsection
