@extends('layouts.nav')

@section('content')
<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">{{ __('Cadastre-se') }}</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <section class="form-group">
                            <label for="name" class="col-md-4 col-form-label">{{ __('Nome') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </section>

                        <section class="form-group">
                            <label for="email" class="col-md-4 col-form-label">{{ __('E-Mail') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </section>
                        <section class="form-row">
                            <div class="form-group col-md-6">
                                <label for="password" class="col-md-4 col-form-label">{{ __('Senha') }}</label>

                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="password-confirm" class="col-md-8 col-form-label">{{ __('Confirme sua senha') }}</label>

                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </section>
                        <section class="form-group text-center">
                                <button type="submit" class="btn pink">
                                    {{ __('Cadastrar') }}
                                </button>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
