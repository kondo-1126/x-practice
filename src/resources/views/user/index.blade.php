@extends('layouts.app')

@section('title', 'ユーザ一覧')


@section('content')
    <main class="container my-5">
        <h1>ユーザ一覧</h1>
        <div>
            <ul class="list-group">
                <!-- user -->
                @foreach($users as $user)
                    <li class="list-group-item">{{ $user->name }}</li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection
