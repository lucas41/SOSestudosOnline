@extends('layouts.nav')

@section('content')
<section class="container">

    <!-- Modal -->
    <div class="modal fade" id="visitante" tabindex="-1" role="dialog" aria-labelledby="visitanteLabel" aria-hidden="true" style="z-index:9999999">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="visitanteLabel">Sou visitante</h5>
                </div>
                <div class="modal-body">
                    A opção "Sou visitante" é pra quem não é aluno da EE "Padre Armani" :)
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn pink" data-dismiss="modal">Entendi!</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim da Modal -->

    <h1 class="display-4">Novo cadastro</h1>
    <form method="POST" action="/post " enctype="multipart/form-data" onSubmit'>
        @csrf
        <section class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="name" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" readonly="readonly" required>
            </div>
            <div class="form-group ml-2">
                <label for="serie">Série</label><br>
                <input type="radio" id="1ano" name="serie" value="1º ano">
                <label for="1ano">1º ano &nbsp; </label>
                <input type="radio" id="2ano" name="serie" value="2º ano">
                <label for="2ano">2º ano &nbsp; </label>
                <input type="radio" id="3ano" name="serie" value="3º ano">
                <label for="3ano">3º ano &nbsp; </label>
                <input type="radio" id="visitante" name="serie" value="Sou visitante">
                <label for="3ano"><em>Sou visitante</em></label>
                <span class="fas fa-question-circle" data-toggle="modal" data-target="#visitante"></span>
            </div>
        </section>
        <section class="form-row">
            <div class="form-group col-md-6">
                <label for="insta">Instagram</label>
                <input type="text" class="form-control" id="insta" name="insta" required>
            </div>
            <div class="form-group col-md-6">
                <label for="face">Facebook</label>
                <input type="text" class="form-control" id="face" name="face" required>
            </div>
        </section>
        
        <section class="form-group">
            <label for="matematica"><h3>Mátematica</h3></label> 
            <select class="custom-select" id="matematica" name="matematica" required>
                <option selected value="">Selecione o assunto</option>
                <option for="matematica" name="matematica" value="Conjuntos numéricos">Conjuntos numéricos</option>
                <option for="matematica" name="matematica" value="Regularidades numéricas">Regularidades numéricas</option>
                <option for="matematica" name="matematica" value="Progressões aritméticas  e progressões geométricas ">Progressões aritméticas  e  progressões geométricas </option>
                <option for="matematica" name="matematica" value="Relação entre duas grandezas">Relação entre duas grandezas</option>
                <option for="matematica" name="matematica" value="Proporcionalidades">Proporcionalidades</option>
                <option for="matematica" name="matematica" value="Função de 1º grau">Função de 1º grau</option>
                <option for="matematica" name="matematica" value="Função de 2º grau">Função de 2º grau</option>
                <option for="matematica" name="matematica" value="Crescimento">Crescimento </option>
                <option for="matematica" name="matematica" value="Função exponencial">Função exponencial</option>
                <option for="matematica" name="matematica" value="Inequações">Inequações</option>
                <option for="matematica" name="matematica" value="Logaritmos">Logaritmos</option>
                <option for="matematica" name="matematica" value="Função logarítmica">Função logarítmica</option>
                <option for="matematica" name="matematica" value="Razões trigonométricas nos triângulos retângulos">Razões trigonométricas nos triângulos retângulos</option>
                <option for="matematica" name="matematica" value="Polígonos regulares">Polígonos regulares</option>
                <option for="matematica" name="matematica" value="Resolução de triângulos não retângulos">Resolução de triângulos não retângulos</option>
            </select>
        </section>
        <input type="hidden" class="form-control" id="idu" name="idu" value="{{ Auth::user()->id }}">
        <div class="form-group">
            <button type="submit" class="btn pink my-2">Enviar</button>
            <button type="reset" class="btn btn-secondary my-2">Cancelar</button>
        </div>
      </form>

    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
        {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i aria-hidden="true">&times;</i>
            </button>
        </div>

    @elseif(session()->has('deleted'))
        <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
        {{ session()->get('deleted') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i aria-hidden="true">&times;</i>
            </button>
        </div>

    @elseif(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show shadow-sm" role="alert">
        {{ session()->get('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i aria-hidden="true">&times;</i>
            </button>
        </div>
    @endif
</section>
@endsection