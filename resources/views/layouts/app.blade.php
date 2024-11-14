<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer type="module"></script>


    @yield('page-css')
    <title>@yield('title')</title>
    @yield('page-scripts')
</head>
<body>
    <header>
        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('assets/logo2.svg') }}">
        </a>
        <nav id="nav-menu">
            <button class="toggle-menu" id="toggle-menu">
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
    <div class="content-section">
        @yield('content')
    </div>
    <footer>
        <div class="footer-info">
            <div class="footer-section">
                <h3>Links</h3>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
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
            </div>
            <div class="footer-section">
                <h3>Serviços</h3>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Serviço1</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">Serviço2</a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}">Serviço3</a>
                    </li>
                    <li>
                        <a href="{{ route('team') }}">Serviço4</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Serviço5</a>
                    </li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Informações</h3>
                <ul>
                    <li style="align-items: flex-start">
                       <img src="{{ asset('assets/pin.png')}}" alt="golden location pin">
                       <p>
                            Avenida Tancredo Neves, 2186, Andar 1, Sala A, Flores, CEP 69.058-120, Manaus-AM
                       </p>
                    </li>
                    <li>
                        <img src="{{ asset('assets/telefone.png')}}" alt="golden telefone">
                        <p>
                            (92) 99117-5171
                        </p>
                    </li>
                    <li>
                        <img src="{{ asset('assets/e-mail.png')}}" alt="golden letter">
                        <p>
                            doralscarvalho19@gmail.com
                        </p>
                    </li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Redes Sociais</h3>
                <ul>
                    <li>
                        <img src="{{ asset('assets/instagram.png') }}" alt="golden instagram icon">
                        <a href="#">instagram.com</a>
                    </li>
                    <li>
                        <img src="{{ asset('assets/facebook.png')}}" alt="golden facebook icon">
                        <a href="#">facebook.com</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-rights">
            &copy; {{ date('Y') }} PeriTax. Todos os direitos reservados.
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>