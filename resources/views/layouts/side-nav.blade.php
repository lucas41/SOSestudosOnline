@extends('layouts.nav')

@section('content')
<style>
    /* Trava o rolamento da página */
    body{
        overflow-y: hidden;
        overflow-x: hidden;
    }
</style>

<div class="row" style="margin-left: 0px; margin-right: 0px;">
    <div id="side-nav" class="border border-darken-1">
        <nav class="nav flex-column">
            <h5><a class="nav-link" href="{{ route('inicio') }}">Últimos cadastros</a></h5>
            <a class="nav-link" data-toggle="collapse" href="#MathCollapse" role="button" aria-expanded="false" aria-controls="MathCollapse">Matemática <i class="fas fa-sort-down"></i></a>
                <div class="collapse texto_sub" id="MathCollapse">
                    <a class="nav-link" href="{{ route('conjuntos') }}">Conjuntos numéricos</a>
                    <a class="nav-link" href="#">Regularidades numéricas</a>
                    <a class="nav-link" href="#">Progressões aritméticas  e <br> progressões geométricas </a>
                    <a class="nav-link" href="#">Relação entre duas grandezas</a>
                    <a class="nav-link" href="#">Proporcionalidades</a>
                    <a class="nav-link" href="#">Função de 1º grau</a>
                    <a class="nav-link" href="#">Função de 2º grau</a>
                    <a class="nav-link" href="#">Crescimento </a>
                    <a class="nav-link" href="#">Função exponencial</a>
                    <a class="nav-link" href="#">inequações</a>
                    <a class="nav-link" href="#">Logaritmos</a>
                    <a class="nav-link" href="#">Função logarítmica</a>
                    <a class="nav-link" href="#">Razões trigonométricas nos <br>triângulos retângulos</a>
                    <a class="nav-link" href="#">Polígonos regulares</a>
                    <a class="nav-link" href="#">Resolução de triângulos não<br> retângulos</a>
                   
                </div>
            <a class="nav-link" href="#">Seus cadastros</a>
        </nav>
    </div>
    <div id="page">
        @yield('materia')
    </div>
</div>
@endsection