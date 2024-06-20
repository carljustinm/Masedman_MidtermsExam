<!DOCTYPE html>
<html>
<head>
    <title>Movies List</title>
</head>
<body>
    <h1>Movies List</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>{{ $movie['title'] }} ({{ $movie['release_date'] }})</li>
        @endforeach
    </ul>
</body>
</html>
