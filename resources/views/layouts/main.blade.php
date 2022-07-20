
<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <!-- <base href="/"> -->

    <title>
        Страница всех заметок
    </title>
    <meta name="description" content="Startup HTML template OptimizedHTML 5">
    <meta property="og:description" content="Startup HTML template OptimizedHTML 5">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="icon" href="images/favicon.png">
    <meta property="og:image" content="images/dist/preview.jpg">

    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}">

</head>

<body>

<header class="main-header">
    <div class="container">
        <ul class="main-menu">
            <li class="main-menu__item">
                <a href="{{route('note.create')}}" class="main-menu__link">Создать заметку</a>
            </li>
        </ul>
    </div>
</header>

<main>


@yield('content')


</main>

<footer class="main-footer"></footer>

<script src="{{asset('assets/js/app.min.js')}}"></script>

</body>

</html>
