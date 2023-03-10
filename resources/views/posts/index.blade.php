@extends('layouts.app')

@section('title')

@section('mainContent')
  <h2>投稿一覧</h2>
  @if (session('message'))
    <p>{{ session('message') }}</p>
  @endif
  <article>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">新規投稿</a>
    <div class="card-list mt-4">
      @foreach ($postList as $post)
        <div class="card mt-3">
          <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>
            <div class="d-flex">
              <a href="{{ route('posts.show', $post) }}" class="btn btn-outline-primary">詳細</a>
              <a href="{{ route('posts.edit', $post) }}" class="btn btn-outline-primary ms-1">編集</a>
              <form action="{{ route('posts.destroy', $post) }}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-outline-danger ms-1">削除</button>
              </form>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </article>
@endsection
