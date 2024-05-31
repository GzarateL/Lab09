<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Gael Zarate</p>
    </footer>
</body>
</html>
