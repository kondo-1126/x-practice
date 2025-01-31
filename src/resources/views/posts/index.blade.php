@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">投稿一覧</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="/posts/registration" class="btn btn-success my-3">新規投稿</a>

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>タイトル</th>
                <th>本文</th>
                <th>作成日時</th>
                <th>アクション</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ Str::limit($post->body, 50) }}</td>
                <td>{{ $post->created_at->format('Y-m-d H:i') }}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-primary">編集</a>
                    <form action="#" method="POST" class="d-inline" onsubmit="return confirm('本当に削除しますか？');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">削除</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
