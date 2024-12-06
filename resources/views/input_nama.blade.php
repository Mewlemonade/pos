<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nama</title>
</head>
<body>
    <form method="GET" action="{{ url('/output') }}/{nama}">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
