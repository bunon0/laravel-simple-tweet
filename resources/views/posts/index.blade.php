@extends('layouts.app')

@section('title')

@section('main-content')
  <h2>投稿一覧</h2>
  <article>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">新規投稿</a>
  </article>
@endsection
