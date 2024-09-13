<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Create</title>
</head>
<body style="background: #2d3748" >


    <h1 style="color: #f7fafc" >Create a new song</h1>
    <form style="color: #f7fafc" action="/songs" method="post">
        <label for="song">Song name:</label>
        <input type="text" name="song" id="song">
        <button type="submit">Create</button>
    </form>
    <a style="color: #f7fafc" href="/songs">Back to all songs</a>


</body>
</html>
