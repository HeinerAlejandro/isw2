@extends('layouts.out-layout')

@section('content')

<div class="container">
    <div class="row box-form valign-wrapper">
        <div class="col s10 offset-s1 m8 offset-m2 l4 offset-l4">
            <div class="card">
                <div class="card-title center-align">
                    <div class="col s10 offset-s1 m8 offset-m2 l6 offset-l3">
                        <img src="public/img/logo.png" alt="" class="responsive-img" style="margin-top: 15%;">
                    </div>  
                </div>

                <div class="card-content">
                    <div class="row login-container">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row">
                                
                                <div class="input-field col s12">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    
                                    <label for="email">{{ __('USUARIO') }}</label>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                 <label for="password" >{{ __('CONTRASEÑA') }}</label>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            @if (Route::has('password.request'))
                                <div class="row">
                                    <div class="input-field col s12">
                                        <a class="" href="{{ route('password.request') }}">
                                            {{ __('¿Olvidó su contraseña?') }}
                                        </a>
                                    </div>
                                </div>
                            @endif  
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-login btn-primary">
                                        {{ __('Iniciar Sesión') }}
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>  
        </div>
    </div>
</div>
@endsection
