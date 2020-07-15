@extends('layouts.nav')

@section('content')
<div class="text-white">
    <div class="first">
        <img src="{{ asset('/imgs/img_index.png') }}" class="img-index" data-aos="zoom-out">
        <div class="col-sm-12 mobile" data-aos="zoom-out">
            <img src="{{ asset('/imgs/logov1.png') }}" id="logo">
            <div class="col-md-5 text-center">
                <h3 class="description">Entre em contato com quem pode te ajudar e ajude quem precisar.</h3>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container" id="sobre">
            <br><br>
            <h1><i class="fas fa-address-card"></i> Sobre nós</h1>
            <div class="row content" data-aos="fade-left">
                <div class="col-md-4">
                    <h5>Alguma coisa</h5>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet tincidunt magna. Nam dictum vehicula lectus, id laoreet turpis placerat sed. Nullam ac metus diam. Fusce tincidunt molestie diam sit amet molestie. Sed quis imperdiet ex. Proin lobortis mauris sit amet ultricies faucibus. Nullam at tortor eu turpis pulvinar porttitor et sit amet ante. Aenean consectetur accumsan leo eu ultrices. Nulla tincidunt id ligula nec pretium. Nullam quis eros id orci elementum pretium ac eget sapien. In hac habitasse platea dictumst. Nunc dignissim, odio nec consequat malesuada, dolor mauris pharetra nibh, at eleifend leo quam et purus. Nunc quis volutpat turpis. Praesent porta consectetur nisl, nec porta nibh mattis vel. Proin quis placerat massa, vitae efficitur 
                </div>
                <div class="col-md-4">
                    <h5>Alguma coisa</h5>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet tincidunt magna. Nam dictum vehicula lectus, id laoreet turpis placerat sed. Nullam ac metus diam. Fusce tincidunt molestie diam sit amet molestie. Sed quis imperdiet ex. Proin lobortis mauris sit amet ultricies faucibus. Nullam at tortor eu turpis pulvinar porttitor et sit amet ante. Aenean consectetur accumsan leo eu ultrices. Nulla tincidunt id ligula nec pretium. Nullam quis eros id orci elementum pretium ac eget sapien. In hac habitasse platea dictumst. Nunc dignissim, odio nec consequat malesuada, dolor mauris pharetra nibh, at eleifend leo quam et purus. Nunc quis volutpat turpis. Praesent porta consectetur nisl, nec porta nibh mattis vel. Proin quis placerat massa, vitae efficitur quam.
                    
                </div>
                <div class="col-md-4">
                    <h5>Alguma coisa</h5>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet tincidunt magna. Nam dictum vehicula lectus, id laoreet turpis placerat sed. Nullam ac metus diam. Fusce tincidunt molestie diam sit amet molestie. Sed quis imperdiet ex. Proin lobortis mauris sit amet ultricies faucibus. Nullam at tortor eu turpis pulvinar porttitor et sit amet ante. Aenean consectetur accumsan leo eu ultrices. Nulla tincidunt id ligula nec pretium. Nullam quis eros id orci elementum pretium ac eget sapien. In hac habitasse platea dictumst. Nunc dignissim, odio nec consequat malesuada, dolor mauris pharetra nibh, at eleifend leo quam et purus. Nunc quis volutpat turpis. Praesent porta consectetur nisl, nec porta nibh mattis vel. Proin quis placerat massa, vitae efficitur quam.
                    
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container" id="contato">
            <h1><i class="fas fa-comments"></i> Contato</h1>
            <div data-aos="fade-left">
                <p>Siga a <i>EE "Padre Armani"</i> nas redes sociais: <a target="none" href="https://www.facebook.com/pe.armani.3/"><span class="fab fa-facebook-square"></span></a>   <a href="" target="none"><span class="fab fa-instagram"> </span></a></p> 
                <h4>Dúvidas ou sujestões? Nos mande um email!</h4>

  method="POST"
                     <form action="https://formspree.io/sosestudosemcasa@gmail.com" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comments">Comentários</label>
                        <textarea name="comments" id="comments" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn pink">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1200,
    });
</script>
@endsection

