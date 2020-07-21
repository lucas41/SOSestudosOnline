@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h4>{{ __('Verificação de E-mail') }}</h4>
                    <hr>
                    @if (session('resent'))
                        <p>
                            {{ __('Um link de verificação foi enviado para o endereço de email fornecido.') }}
                        </p>
                    @endif

                    <p>{{ __('Se você não recebeu o link') }},</p>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clique para enviar novamente') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
