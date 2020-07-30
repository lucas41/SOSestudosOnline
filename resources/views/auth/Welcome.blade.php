@extends('layouts.nav')

@section('content')
<div id="welcome" class="text-white">
    <header id="apresentacao">
        <img src="{{ asset('/imgs/img_index.png') }}" class="img-index">
        <div class="col-sm-12 mobile">
            <img src="{{ asset('/imgs/logov1.png') }}" id="logo">
            <div class="col-md-5 text-center">
                <h3 class="description">Entre em contato com quem pode te ajudar e ajude quem precisar.</h3>
            </div>
        </div>
    </header>

    <section>
        <div class="container" id="sobre">
            <h1><i class="fas fa-address-card"></i> Sobre nós</h1>
            <div>
                <div class="row content">
                    <div class="col-md-4">
                        <h5>O que é? </h5>
                        <p>A <em>S.O.S.: Estudos em Casa</em> é uma plataforma criada para conectar os alunos que possuem dúvidas em alguns assuntos com estudantes que já o dominam.</p>
                    </div>
                    <div class="col-md-4">
                        <h5>Como funciona?</h5>
                        <p>A ideia é simples! Você se cadastra, colocando o link de suas redes sociais para as pessoas te encontrarem. Depois acrescenta alguns conteúdos que você conhece bem a ponto de conseguir ensinar os outros. Feito isso, você pode clicar em algum assunto que tem dúvidas e descobrir quem pode te ajudar, entrar em contato com a pessoa e assim se ajudarem.           </p>
                    </div>
                    <div class="col-md-4">
                        <h5>Por que foi criado?</h5>
                        <p>A iniciativa foi inspirada na teoria de William Glasser (1925-2013), um psiquiatra americano, que diz que 95% do conhecimento é aprendido quando temos que ensinar alguém. Você pode ler um pouco mais sobre o estudo <a href="http://www.institutopuruna.com.br/como-aprendemos-a-teoria-da-escolha-de-william-glasser/" target="none">aqui</a>.</p>
                    </div>
                </div>
                <figure class="text-center">
                    <img src="{{ asset('/imgs/livros.png') }}" width="100%" alt="">
                </figure>
            </div>
        </div>
    </section>

    <section>
        <div class="container" id="equipe">
            <h1><i class="fas fa-users"></i> Nossa equipe</h1>
            <div>
                <div class="row content text-center">
                    <div class="col-md-4 membro">
                        <img class="rounded-circle" src="{{ asset('/imgs/equipe/daniel.jpg') }}" alt="Daniel Germinaro">
                        <p>
                            <h4>Daniel Germinaro</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Idealizador</h6>
                        </p>
                        <p>
                            <a href="https://www.facebook.com/daniel.germinaro" target="none"><span class="fab fa-facebook-square"></span></a>
                            <a href="https://www.instagram.com/daniel.germinaro/" target="none"><span class="fab fa-instagram"></span></a>
                        </p>
                    </div>

                    <div class="col-md-4 membro">
                        <img class="rounded-circle" src="{{ asset('/imgs/equipe/isabella.jpg') }}" alt="Isabella Adorno">
                        <p>
                            <h4>Isabella Adorno</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Front-end Developer</h6>
                        </p>
                        <p>
                            <a href="https://github.com/bellps" target="none"><span class="fab fa-github"></span></a>
                            <a href="https://www.linkedin.com/in/isabella-adorno/" target="none"><span class="fab fa-linkedin"></span></a>
                        </p>
                    </div>

                    <div class="col-md-4 membro">
                        <img class="rounded-circle" src="{{ asset('/imgs/equipe/lucas.jpg') }}" alt="Lucas Delfini">
                        <p>
                            <h4>Lucas Delfini</h4>
                            <h6 class="card-subtitle mb-2 text-muted">Back-end Developer</h6>
                        </p>
                        <p>
                            <a href="https://www.facebook.com/lucas.delfini.16" target="none"><span class="fab fa-facebook-square"></span></a>
                            <a href="https://www.linkedin.com/in/lucas-delfini-ribeiro-da-silva-8388357a" target="none"><span class="fab fa-linkedin"></span></a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container" id="contato">
            <h1><i class="fas fa-comments"></i> Contato</h1>
            <div>
                <p>Siga a <em>EE "Padre Armani"</em> nas redes sociais: <a target="none" href="https://www.facebook.com/pe.armani.3/"><span class="fab fa-facebook-square"></span></a>   <a href="" target="none"><span class="fab fa-instagram"> </span></a></p> 
                <h4>Dúvidas ou sujestões? Nos mande um email!</h4>
                <form action="https://formspree.io/sosestudosemcasa@gmail.com" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comments">Comentários</label>
                        <textarea name="comments" id="comments" cols="30" rows="5" class="form-control" required></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn pink">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<script src="https://unpkg.com/scrollreveal@4"></script>
<script src="{{ asset('/js/animations.js') }}"></script>
@endsection

