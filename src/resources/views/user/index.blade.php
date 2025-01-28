<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">    <title>X | ユーザ一覧</title>
</head>
<body>
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
</body>
</html>
