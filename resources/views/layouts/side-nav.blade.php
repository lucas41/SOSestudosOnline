@extends('layouts.nav')

@section('content')
<style>
    /* Trava o rolamento da página */
    body{
        overflow-y: hidden;
        overflow-x: hidden;
    }
</style>

<section class="row" id="principal">
    <aside class="border border-darken-1">
        <nav class="nav flex-column">
            <h5><a class="nav-link" href="{{ route('inicio') }}">Últimos cadastros</a></h5>
            <a class="nav-link" data-toggle="collapse" href="#MathCollapse" role="button" aria-expanded="false" aria-controls="MathCollapse">Matemática <i class="fas fa-sort-down"></i></a>
                <div class="collapse texto_sub" id="MathCollapse">
                    <a class="nav-link" href="{{ route('conjuntos') }}">Conjuntos numéricos</a>
                    <a class="nav-link" href="{{ route('regulariedade') }}">Regularidades numéricas</a>
                    <a class="nav-link" href="{{ route('Progressoes') }}">Progressões aritméticas  e <br> progressões geométricas </a>
                    <a class="nav-link" href="{{ route('duasgrandezas') }}">Relação entre duas grandezas</a>
                    <a class="nav-link" href="{{ route('Proporcionalidades') }}">Proporcionalidades</a>
                    <a class="nav-link" href="{{ route('Funcao_de_1_grau') }}">Função de 1º grau</a>
                    <a class="nav-link" href="{{ route('Funcao_de_2_grau') }}">Função de 2º grau</a>
                    <a class="nav-link" href="{{ route('Crescimento') }}">Crescimento </a>
                    <a class="nav-link" href="{{ route('Funcao_exponencial') }}">Função exponencial</a>
                    <a class="nav-link" href="{{ route('inequacoes') }}">Inequações</a>
                    <a class="nav-link" href="{{ route('Logaritmos') }}">Logaritmos</a>
                    <a class="nav-link" href="{{ route('Funcao_logaritmica') }}">Função logarítmica</a>
                    <a class="nav-link" href="{{ route('trigonometricas') }}">Razões trigonométricas nos <br> triângulos retângulos</a>
                    <a class="nav-link" href="{{ route('Poligonos_regulares') }}">Polígonos regulares</a>
                    <a class="nav-link" href="{{ route('triangulos_nao_retangulos') }}">Resolução de triângulos não<br> retângulos</a>
                   
                </div>
            <a class="nav-link" href="{{ route('seus_cadastros') }}">Seus cadastros</a>
        </nav>
    </aside>
    <article id="cartoes">
        @yield('materia')
    </article>
</section>
@endsection