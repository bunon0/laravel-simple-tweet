@extends('layouts.app')

@section('title', '投稿編集 | ' . config('app.name'))

@section('mainContent')
  <h2>投稿編集</h2>
  <a href="{{ route('posts.index') }}" class="btn btn-link">&lt;戻る</a>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  </div>
  <form action="{{ route('posts.update', $post) }}" method="post">
    @method('PUT')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">タイトル</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">本文</label>
      <textarea class="form-control" id="content" rows="3" name="content">{{ $post->content }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">更新</button>
  </form>
@endsection
