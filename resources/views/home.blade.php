<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @foreach($movies as $movie)
    <span>{{$movie['title']}}</span>
    @endforeach
</body>

</html>