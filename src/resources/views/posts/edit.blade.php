@extends('layouts.app')

@section('content')
<div class="container">
    <h2>投稿を編集</h2>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">タイトル</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">内容</label>
            <textarea class="form-control" id="content" name="content" required>{{ old('content', $post->content) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">更新</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">キャンセル</a>
    </form>
</div>
@endsection
