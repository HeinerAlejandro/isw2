@extends('layouts.out-layout') 
@section('content') {{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                    required> @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<section id="reset-password-email">
    <div class="row container mb-0">
        <div class="col s12 m6 push-m3">
            <div class="card">
                <div class="card-content text-uppercase">
                    <span class="card-title text-uppercase center-align">
                        <h5>Recuperar contraseña</h5>
                    </span>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="row mb-0">
                            <div class="col s12 m12 l12">
                                <div class="input-field col s12 m12 l12">
                                    <input id="email" name="email" type="email" value="{{ old('login') }}" required autofocus />
                                    <label for="user">Email</label>
                                </div>
                                <div class="input-field col s12 m12 l12">
                                    <button class="btn col s12">Enviar solicitud</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection