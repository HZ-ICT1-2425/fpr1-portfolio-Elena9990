<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/resources/css/app.css">
    <meta charset="UTF-8">
    <meta name="description" content="Are you curious to see a motivated student who wants to achieve their goals?
    Here you can find them and start a journey in their inside world.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
<!--navigation bar-->
<x-menu.navbar>

</x-menu.navbar>

@if (Request::is('/'))
    <div class="background-container-index-page">
        @endif

<x-menu.aside>

</x-menu.aside>

        @if (Request::is('/'))
    </div>
@endif

{{$slot}}
</body>

<!--footer-->
<footer>
    <p>&copy; 2024 Elena |
        <a href="https://github.com/Elena9990" target="_blank">GitHub</a> |
        <a href="https://www.facebook.com/profile.php?id=100008649525337" target="_blank">Facebook</a>
        <a href="https://hz.nl/" target="_blank">
            <img src="{{asset('images/hz-university-of-applied-sciences.png')}}" alt="HZ University Of Applied sciences">
        </a>
    </p>
</footer>

</html>

