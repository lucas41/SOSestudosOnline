@extends('layouts.nav')

@section('content')
<section class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">Login</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <section class="form-group">
                            <label for="email" class="text-md-right">{{ __('E-Mail') }}</label>
                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </section>

                        <section class="form-group">
                            <label for="password" class="text-md-right">{{ __('Password') }}</label>
                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </section>

                        <section class="form-group">
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </section>

                        @if (Route::has('password.request'))
                            <a class="" href="{{ route('password.request') }}">
                                {{ __('Esqueci minha senha!') }}
                            </a>
                        @endif

                        <div class="form-group text-center">
                            <button type="submit" class="btn pink">
                                {{ __('Entrar') }}
                            </button>
                        </div>
                                   
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
