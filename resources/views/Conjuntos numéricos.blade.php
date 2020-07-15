@extends('layouts.nav')

@section('content')
<style>
    /* Trava o rolamento da página */
    body{
        overflow-y: hidden;
        overflow-x: hidden;
    }
</style>

<div class="row" style="margin-right: 0">
    <div id="side-nav" class="border border-darken-1">
        <nav class="nav flex-column">
            <h5><a class="nav-link" href="#">Últimos cadastros</a></h5>
            <a class="nav-link" data-toggle="collapse" href="#MathCollapse" role="button" aria-expanded="false" aria-controls="MathCollapse">Matemática <i class="fas fa-sort-down"></i></a>
                
                <div class="collapse texto_sub" id="MathCollapse">
                    <a class="nav-link" href="/Conjuntos numéricos">Conjuntos numéricos</a>
                    <a class="nav-link" href="#">Regularidades numéricas</a>
                    <a class="nav-link" href="#">Progressões aritméticas  e <br> progressões geométricas </a>
                    <a class="nav-link" href="#">Relação entre duas grandezas</a>
                    <a class="nav-link" href="#">Proporcionalidades</a>
                    <a class="nav-link" href="#">Função de 1ª grau</a>
                    <a class="nav-link" href="#">Função de 2oª grau</a>
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
        <h3>Últimos cadastros</h3>
        <hr>
        <div class="row">
        @foreach($posts as $post)
            <div class="card" id="cartao">
                <div class="card-body">
                    <h4 class="card-title" title="{{ $post->name}}">
                        <i>{{ $post->name}} </i>
                        <a href="{{$post->face}}" target="none"> <span class="fab fa-facebook-square"></span></a>
                    </h4>
                    <h6 class="card-subtitle mb-2 text-muted">{{$post->serie}}</h6>
                    <h6><em>É ótimo(a) com:</em></h6>
                    <p class="card-text">{{$post->matematica}}</p>
                    <p>
                        <span class="fab fa-whatsapp"></span> {{$post->insta}}
                    </p>
                    @if (Auth::user()->name == $post->name)
                        <div class="text-right">
                            <form method='post' action="/post{{ $post->id}}">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                                <button type="submit" class="btn btn-sm btn-outline-danger">Apagar</button>
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach  
        </div>
    </div>
</div>

@endsection