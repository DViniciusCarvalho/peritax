@extends('layouts/app')

@section('title', 'PeriTax')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('page-scripts')
    <script src="{{ asset('js/home.js') }}" defer></script>
@endsection

@section('content')
    <main>
        <div class="hero-section">
            <div class="overlay"></div>
            <h1>Solucionando Desafios Contábeis e Administrativos com Precisão e Agilidade</h1>
            <p>Soluções precisas e personalizadas para apoiar decisões estratégicas, com credibilidade e experiência em análises financeiras e auditorias.</p>
            <a class="arrow-link" href="#services-section">
                <div class="arrow-draw"></div>
            </a>
        </div>
        <div class="content-group">
            <div id="services-section" class="content-section">
                <div class="animation-layer">
                    <div class="content-wrapper">
                        <h2>Nossos Serviços</h2>
                        <p>Descubra como podemos apoiar o crescimento e sucesso do seu negócio.</p>
                        <div class="services-wrapper">
                            <div class="service">
                                <div class="service-icon-title">
                                    <img src="{{ asset('assets/contabilidade.png') }}" alt="accounting golden icon">
                                    <h3>Contabilidade</h3>
                                </div>
                                <p class="service-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus repellat ipsa laboriosam vero neque tempora pariatur praesentium exercitationem a quaerat ipsam sunt fugiat, iure placeat qui molestiae. Recusandae, vel odit!</p>
                            </div>
                            <div class="service">
                                <div class="service-icon-title">
                                    <img src="{{ asset('assets/contabilidade.png') }}" alt="accounting golden icon">
                                    <h3>Administração</h3>
                                </div>
                                <p class="service-description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus repellat ipsa laboriosam vero neque tempora pariatur praesentium exercitationem a quaerat ipsam sunt fugiat, iure placeat qui molestiae. Recusandae, vel odit!</p>
                            </div>
                        </div>
                    </div>
                    <a class="arrow-link" href="#about-section">
                        <div class="arrow-draw"></div>
                    </a>
                </div>
            </div>
            <div id="about-section" class="content-section">
                <div class="animation-layer">
                    <div class="content-wrapper">
                        <h2>Quem Somos</h2>
                        <p>Conheça nossa história, nossos valores e o que nos motiva a servir você.</p>
                    </div>
                    <a class="arrow-link" href="#clients-section">
                        <div class="arrow-draw"></div>
                    </a>
                </div>
            </div>
            <div id="clients-section" class="content-section">
                <div class="animation-layer">
                    <div class="content-wrapper">
                        <h2>Nossos Clientes</h2>
                        <p>Parcerias de sucesso que refletem nossa dedicação e compromisso.</p>
                    </div>
                    <a class="arrow-link" href="#content">
                        <div class="arrow-draw"></div>
                    </a>
                </div>
            </div>
        </div>
    </main>
@endsection