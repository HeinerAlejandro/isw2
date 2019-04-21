@extends('layouts.out-layout')
@section('title') Iniciar sesión
@endsection
@section('content') 
{{--
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
                                    <input id="login" type="text" autocomplete="off" class="form-control{{ $errors->has('login') ? ' is-invalid' : '' }}" name="login"
                                        value="{{ old('login') }}" required autofocus>

                                    <label for="login">{{ __('USUARIO') }}</label> @if ($errors->has('login'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span> @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                        required>
                                    <label for="password">{{ __('CONTRASEÑA') }}</label> @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
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
--}}

<section id="login-form">
    <div class="row">
        <div class="col s12">
            <form method="POST" action="{{ route('login') }}" id="login-container" class="z-depth-1" autocomplete="off">
                @csrf
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="center-align">
                            <img src="{{ asset('public/img/logo-lugu-svg.svg') }}" class="logo-lugu" alt="Logo de LUGU" />
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <input id="login" name="login" type="text" value="{{ old('login') }}" required autofocus />
                            <label for="user">Usuario</label>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <input id="password" name="password" type="password" required />
                            <label for="password">Contraseña</label>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <button type="submit" class="btn col s12">Iniciar sesión</button>
                        </div>
                        @if (Route::has('password.request'))
                        <div class="col s12 m12 l12 center-align">
                            <a href="{{ route('password.request') }}" class="secondary-text-color">¿Olvidaste tu contraseña?</a>
                        </div>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection