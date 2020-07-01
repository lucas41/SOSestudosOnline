<!doctype html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Álbum</title>
    <style>
        body { padding: 20px; }
        .navbar { margin-bottom: 20px; }
        :root { --jumbotron-padding-y: 10px; }
        .jumbotron {
          padding-top: var(--jumbotron-padding-y);
          padding-bottom: var(--jumbotron-padding-y);
          margin-bottom: 0;
          background-color: #fff;
        }
        @media (min-width: 768px) {
          .jumbotron {
            padding-top: calc(var(--jumbotron-padding-y) * 2);
            padding-bottom: calc(var(--jumbotron-padding-y) * 2);
          }
        }
        .jumbotron p:last-child { margin-bottom: 0; }
        .jumbotron-heading { font-weight: 300; }
        .jumbotron .container { max-width: 40rem; }
        .btn-card { margin: 4px; }
        .btn { margin-right: 5px; }
        footer { padding-top: 3rem; padding-bottom: 3rem; }
        footer p { margin-bottom: .25rem; }
    </style>
</head>
<body>

    <header>
      <div class="navbar navbar-dark bg-dark shadow-sm">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Seu álbum de fotos</strong>
          </a>
      </div>
    </header>

    <main role="main">
    <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Escreva aqui seu novo Post</h1>
          <form method="POST" action="/" enctype="multipart/form-data">
            @csrf
            <div class="form-group text-left">
              <label for="email">Nome</label>
              <input type="name" class="form-control" id="name" name="name" placeholder="Seu nome">
            </div>
            <div class="form-group text-left">
            <label for="email">Sua série</label><br>
            <input type="radio" id="1ano" name="serie" value="1ano">
                <label for="1ano">1º ano &nbsp; </label>
                <input type="radio" id="2ano" name="serie" value="2ano">
                <label for="2ano">2º ano &nbsp; </label>
                <input type="radio" id="3ano" name="serie" value="3ano">
                <label for="3ano">3º ano</label>
            </div>
            <div class="form-group text-left">
           
              <label for="whats">what's app</label>
              <img src="media/zap.png" alt="some text" width=50 height=50>
              <input type="text" class="form-control cel-sp-mask" id="insta" name="insta" placeholder="Ex.: (00) 00000-0000">
              
    
            </div>
            <div class="form-group text-left">
         
              <label for="face">Facebook</label>
              <img src="media/face.png" alt="some text" width=50 height=50>
              <textarea class="form-control" id="face" name="face" rows="1"></textarea>
            </div>
        <h3> Mátematica </h3>
            <input type="checkbox" id="matematica" name="matematica" value="PAPG">
<label for="matematica"> PA & PG &nbsp;</label>
<input type="checkbox" id="matematica" name="matematica" value="funcao1">
<label for="matematica"> função do 1 grau &nbsp;</label>
<input type="checkbox" id="matematica" name="matematica" value="funcao2">
<label for="matematica"> função do 2 grau</label>
       
            <p>
              <button type="submit" class="btn btn-primary my-2">Enviar</button>
              <button type="reset" class="btn btn-secondary my-2">Cancelar</button>
            </p>
          </form>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
        @foreach($posts as $post)    
                <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    <img class="card-img-top figure-img img-fluid rounded" src="">
                    <div class="card-body">
                      <p class="card-text">{{ $post->name}}</p>
                      <p class="card-text">{{$post->serie}}</p>
                      <p class="card-text">{{$post->Insta}}</p>
                      <p class="card-text">{{$post->face}}</p>
                      <p class="card-text">{{$post->matematica}}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <!--button type="button" class="btn btn-sm btn-outline-secondary">Download</button-->
                          <a type="button" class="btn btn-sm btn-outline-secondary" href="#">Download</a>
                          <form method='post' action="/{{ $post->id}}">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" class="btn btn-sm btn-outline-danger">Apagar</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            @endforeach
          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Voltar para cima</a>
        </p>
        <p>©2018 Sua empresa.com</p>
      </div>
    </footer>

    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>