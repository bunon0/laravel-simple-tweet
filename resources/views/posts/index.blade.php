@extends('layouts.app')

@section('title')

@section('main-content')
  <h2>投稿一覧</h2>
  {{-- {{ dd($articleList) }} --}}
  <article>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">新規投稿</a>
    <div class="card-list mt-4">
      @foreach ($postList as $post)
        <div class="card mt-3">
          <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>
            <a href="{{ route('posts.show', $post) }}" class="btn btn-outline-primary">詳細</a>
            <a href="#" class="btn btn-outline-primary ms-1">編集</a>
            <a href="#" class="btn btn-outline-danger ms-1">削除</a>
          </div>
        </div>
      @endforeach
    </div>
  </article>
@endsection
