<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('assets/logo2.svg') }}">
        </a>
        <nav class="open">
            <button class="toggle-menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="menu-items">
                <li>
                    <a href="{{ route('about') }}">Sobre</a>
                </li>
                <li>
                    <a href="{{ route('services') }}">Serviços</a>
                </li>
                <li>
                    <a href="{{ route('team') }}">Equipe</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Contato</a>
                </li>
            </ul>
        </nav>
    </header>
    <main></main>
    <footer>
        <div class="footer-info">

        </div>
        <div class="footer-rights">

        </div>
    </footer>
</body>
</html>