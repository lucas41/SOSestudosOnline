@extends('layouts.nav')

@section('content')
<div class="container">
    <h1 class="display-4">Perguntas frequentes</h1>
    <div class="accordion" id="perguntas">
        <div class="card">
            <div class="card-header" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Como acho o link para o meu perfil do Facebook?
                </button>
            </h2>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#perguntas">
            <div class="card-body">
                <p><b>No app: </b>vá até seu perfil e clique no botão cinza ao lado do "Adicionar ao story". O link estará no final da página, pronto para ser copiado :)</p>
                <p><b>No computador: </b>acesse seu perfil e copie a URL do navegador.</p>
            </div>
            </div>
        </div> 
        <div class="card">
            <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link  btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Como acho o link para o meu perfil do Instagram?
                </button>
            </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#perguntas">
            <div class="card-body">
                Apenas escreva "https://Instagram.com/" e, após a barra, coloque seu @.
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link  btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Não tenho uma das redes sociais pedidas, e agora?
                </button>
            </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#perguntas">
            <div class="card-body">
                Sem problemas! Apenas repita o link daquela que você tiver.
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link  btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseThree">
                Para que serve esse site, afinal?
                </button>
            </h2>
            </div>
            <div id="collapse4" class="collapse" aria-labelledby="headingThree" data-parent="#perguntas">
            <div class="card-body">
                O <em>SOS: Estudos em casa</em> foi desenvolvido com o objetivo de ajudar estudantes a estudarem em suas casas durante a pandemia, unindo aqueles que tem conhecimento com os que precisam.
            </div>
            </div>
        </div>
    </div>
</div>
@endSection