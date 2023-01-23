<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="gradient p-5">
@dump($movies)
    <div class="row g-5">

        @foreach ($movies as $movie)
        <div class="col-3">
            <div class="card">
                <img class="img-fluid" src="https://www.gaetanews24.it/news/wp-content/uploads/2018/10/video11.jpg" alt="imgae">
                <h3 class="text-info pt-3 text-center">Titolo: {{$movie->title}}</h3>
                <h5 class="text-center text-danger font-semibold">Movie-ID: {{$movie->id}}</h5>
                <p class="text-center font-semibold">Nationality: {{$movie->nationality}}</p>
                <p class="text-center font-semibold">Date: {{$movie->date}}</p>
                <p class="text-center font-semibold">Original_title: {{$movie->original_title}}</p>
                <p class="text-center font-semibold">Vote: {{$movie->vote}}</p>
                
            </div>
        </div>

        
        @endforeach
    </div>
</div>
</body>

</html>
