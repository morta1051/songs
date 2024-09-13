<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>{{ $song }}</title>
</head>
<body style="background: #2d3748"  >

<div id="app">
    <h1 style="color: #f7fafc" style="font-weight: bolder" >Songs</h1>
    <h1 style="color: #f7fafc" > {{ $song }}</h1>
    <a style="color: #f7fafc" href="/songs">Back to all songs</a>
</div>

</body>
</html>
