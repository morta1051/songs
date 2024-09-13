<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Songs</title>
</head>
<body style="background: #2d3748" >

<div id="app">
    <h1 style="color: #f7fafc" >Songs</h1>
    <ul>
        @foreach($songs as $index => $song)
            <li>
                <a style="color: #f7fafc" {{ $index }}>{{ $song }}</a>
            </li>
        @endforeach
    </ul>
</div>
</body>
</html>
