<!DOCTYPE html>
<html>
<head>
    <title>Daftar Postingan</title>
</head>
<body>
    <h1>Daftar Postingan</h1>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('post.show', ['id' => $post->id]) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
