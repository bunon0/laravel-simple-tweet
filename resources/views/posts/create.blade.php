@extends('layouts.app')

@section('title', '投稿ページ | 投稿アプリ')

@section('main-content')
  <h2>新規投稿</h2>
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
  <form action="{{ route('posts.store') }}" method="post">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">タイトル</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">本文</label>
      <textarea class="form-control" id="content" rows="3" name="content"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">投稿</button>
  </form>
@endsection
