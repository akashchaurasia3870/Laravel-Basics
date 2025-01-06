<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LEC 10 - @yield('title','LARAVEL')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
    </header>

    <article>
        @hasSection ('content')  
        @yield('content')
        @else
        <h2>No Content Found</h2>  
        @endif
    </article>

    @section('sidebar')
    <aside class="sidebar">
        <ul>
            <li><a href="/l10/home">Home</a></li>
            <li><a href="/l10/about">About</a></li>
            <li><a href="/l10/contact">Contact</a></li>
        </ul>
    </aside>
    @show

    <footer>
        <p>&copy; 2025 Your Website</p>
    </footer>

    @stack('scripts')
</body>
</html>
