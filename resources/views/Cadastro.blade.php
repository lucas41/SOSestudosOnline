@extends('layouts.nav')

@section('content')
<div class="container">
    <h1 class="display-4">Novo cadastro</h1>
    <form method="POST" action="/post " enctype="multipart/form-data" onSubmit'>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="name" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" readonly="readonly" required>
            </div>
            <div id="serie" class="form-group">
                <label for="serie">Série</label><br>
                <input type="radio" id="1ano" name="serie" value="1º ano">
                <label for="1ano">1º ano &nbsp; </label>
                <input type="radio" id="2ano" name="serie" value="2º ano">
                <label for="2ano">2º ano &nbsp; </label>
                <input type="radio" id="3ano" name="serie" value="3º ano">
                <label for="3ano">3º ano</label>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="insta">Instagram</label>
                <input type="text" class="form-control" id="insta" name="insta" required>
            </div>
            <div class="form-group col-md-6">
                <label for="face">Facebook</label>
                <input type="text" class="form-control" id="face" name="face" required>
            </div>
        </div>
        
        <div class="form-group">
            <h3>Mátematica</h3>
            <select class="custom-select" id="matematica" name="matematica" required>
                <option selected>Selecione o assunto</option>
                <option for="matematica" name="matematica" value="PA & PG">PA & PG</option>
                <option for="matematica"  name="matematica" value="Função do 1º grau">Função do 1º grau</option>
                <option for="matematica" name="matematica" value="Função do 2º grau">Função do 2º grau</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn pink my-2">Enviar</button>
            <button type="reset" class="btn btn-secondary my-2">Cancelar</button>
        </div>
      </form>
</div>

    
@endsection