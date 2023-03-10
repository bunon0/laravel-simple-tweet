@extends('layouts.app')

@section('title', '投稿詳細 | 投稿アプリ')

@section('mainContent')
  <h2>投稿詳細</h2>
  <a href="{{ route('posts.index') }}" class="btn btn-link">&lt;戻る</a>
  <div class="card mt-3">
    <div class="card-body">
      <h5 class="card-title">{{ $post->title }}</h5>
      <p class="card-text">{{ $post->content }}</p>
      <div class="d-flex">
        <a href="{{ route('posts.edit', $post) }}" class="btn btn-outline-primary ms-1">編集</a>
        <form action="{{ route('posts.destroy', $post) }}" method="post">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-outline-danger ms-1">削除</button>
        </form>
      </div>
    </div>
  </div>
@endsection
