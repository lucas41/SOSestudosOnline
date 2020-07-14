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
                    <a class="nav-link" href="#">PA & PG</a>
                    <a class="nav-link" href="#">Função do 1º grau</a>
                    <a class="nav-link" href="#">Função do 2º grau</a>
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
                    </h4>
                    <h6 class="card-subtitle mb-2 text-muted">{{$post->serie}}</h6>
                    <h6><em>É ótimo(a) com:</em></h6>
                    <p class="card-text">{{$post->matematica}}</p>
                    <h6 class="text-right">
                        <a href="{{$post->face}}" target="none"> <span class="fab fa-facebook-square"> </span></a>
                        <a href="{{$post->insta}}" target="none"> <span class="fab fa-instagram"> </span></a> 
                    </h6>
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