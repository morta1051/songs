<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>{{ $song }}</title>
</head>
<body style="background: #2d3748" >

<form style="color: #f7fafc">
    <label for="song">Song name:</label>
    <input style="color: #18181b" type="text" name="song" id="song" value="{{ $song }}">
    <button type="submit">Update</button>
</form>
<a style="color: #f7fafc" href="/songs">Back to all songs</a>
</body>
</html>
