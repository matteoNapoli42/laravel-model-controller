<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Model Controller</title>
    @vite('resources/js/app.js')
</head>

<body>
    <h1>Movies</h1>
    <div class="myContainer ">
        @foreach($movies as $movie)
        <div class="card">
            <img src="https://picsum.photos/200/300?random={{$random = rand(0,100)}}" alt="" class=" imgStyle">
            <h4>{{$movie['title']}}</h4>
            <span>Data di rilascio : {{$movie['date']}}</span>
            <span>Nazione : {{$movie['nationality']}}</span>
            <span>Voto : {{$movie['vote']}}</span>
        </div>
        @endforeach
    </div>




</body>

</html>