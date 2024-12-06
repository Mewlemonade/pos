<!DOCTYPE html>
<html>
<head>
    <title>Show Post</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <a href="{{ route('post.delete', ['id' => $post->id]) }}" 
        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $post->id }}').submit();">
        Hapus
    </a>
    <form id="delete-form-{{ $post->id }}" action="{{ route('post.delete', ['id' => $post->id]) }}" 
        method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>

    <form method="POST" action="{{ route('post.update', ['id' => $post->id]) }}">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $post->title }}">
        <textarea name="content">{{ $post->content }}</textarea>
        <button type="submit">Simpan Perubahan</button>
    </form>
    
</body>
</html>
