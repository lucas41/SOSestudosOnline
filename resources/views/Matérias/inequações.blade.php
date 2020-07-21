@extends('layouts.side-nav')

@section('materia')
        <h3>inequações</h3>
        <hr>
        <div class="row">
            <div class="card-columns">
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
                            @if (Auth::user()->id == $post->idu)
                                <div class="text-right">
                                    <form method='post' action="/post{{ $post->id}}">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete">
                                        <button type="submit" class="btn btn-sm pink">Apagar</button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach  
            </div>
        </div>
@endsection