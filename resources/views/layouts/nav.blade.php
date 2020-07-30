<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
        <link href="https://fonts.google.com" rel="preconnect" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet" as="font" crossorigin>
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        @guest 
            <title>Estudos em casa</title>
            <link rel="stylesheet" href="{{ asset('css/logout.css') }}">
        </head>
        <body>
            <header>
                <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <a class="navbar-brand ml-2" href="/#apresentacao">
                            <img src="{{ asset('/imgs/brasao.png') }}" width="30" height="30" loading="lazy">
                            SOS
                        </a>
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/#sobre">Sobre nós</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/#contato">Contato</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        </ul>  
                    </div>
        @else
            <title>{{$view_name}} / SOS</title>
            <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        </head>
        <body>
            <header>
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                        <ul id="topicos" class="mr-auto">
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Tópicos
                                </a>
                                <div id="menu" class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('inicio') }}">Últimos cadastros</a>
                                    <a class="dropdown-item">Matemática</a>
                                    <div class="texto_sub">
                                        <a class="dropdown-item" href="{{ route('conjuntos') }}">Conjuntos numéricos</a>
                                        <a class="dropdown-item" href="{{ route('regulariedade') }}">Regularidades numéricas</a>
                                        <a class="dropdown-item" href="{{ route('Progressoes') }}">Progressões aritméticas  e <br> progressões geométricas </a>
                                        <a class="dropdown-item" href="{{ route('duasgrandezas') }}">Relação entre duas grandezas</a>
                                        <a class="dropdown-item" href="{{ route('Proporcionalidades') }}">Proporcionalidades</a>
                                        <a class="dropdown-item" href="{{ route('Funcao_de_1_grau') }}">Função de 1º grau</a>
                                        <a class="dropdown-item" href="{{ route('Funcao_de_2_grau') }}">Função de 2º grau</a>
                                        <a class="dropdown-item" href="{{ route('Crescimento') }}">Crescimento </a>
                                        <a class="dropdown-item" href="{{ route('Funcao_exponencial') }}">Função exponencial</a>
                                        <a class="dropdown-item" href="{{ route('inequacoes') }}">Inequações</a>
                                        <a class="dropdown-item" href="{{ route('Logaritmos') }}">Logaritmos</a>
                                        <a class="dropdown-item" href="{{ route('Funcao_logaritmica') }}">Função logarítmica</a>
                                        <a class="dropdown-item" href="{{ route('trigonometricas') }}">Razões trigonométricas nos <br> triângulos retângulos</a>
                                        <a class="dropdown-item" href="{{ route('Poligonos_regulares') }}">Polígonos regulares</a>
                                        <a class="dropdown-item" href="{{ route('triangulos_nao_retangulos') }}">Resolução de triângulos não<br> retângulos</a>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('seus_cadastros') }}">Seus cadastros</a>
                                </div>
                            </li>
                        </ul>
                <div class="collapse navbar-collapse" id="navbarText">
                    <a class="navbar-brand ml-2" href="{{ route('inicio') }}">
                            <img src="{{ asset('/imgs/brasao.png') }}" width="30" height="30" loading="lazy">
                    </a>
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('inicio') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cadastro') }}">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('help') }}">Ajuda</a>
                        </li>
                    </ul>
                </div>
                <button class="btn pink" type="submit" href="{{ route('logout') }}" onclick="exit()">Sair</button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <script src="{{ asset('js/extra.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>