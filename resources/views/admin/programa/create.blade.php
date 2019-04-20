@extends('layouts.main-layout') 
@section('title') Agregar Programa
@endsection
 
@section('content') 

{{--
<div class="container">
	<div class="row">
		<form method="POST" action="{{ route('programa.store') }}" class="col s12">
			@csrf
			<div class="row">
				<div class="input-field col s12">
					<input id="nombre" name="nombre" type="text" class="validate">
					<label for="nombre">Nombre</label> @if ($errors->has('nombre'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('nombre') }}</strong>
					</span> @endif
				</div>
			</div>
			<button class="btn waves-effect waves-light" type="submit">Agregar
		    	<i class="material-icons right">send</i>
		    </button>
		</form>
	</div>
</div>
--}}

<section id="create-programa">
	<div class="row container">
		<div class="card col s12 m6 push-m2">
			<form method="POST" action="{{ route('programa.store') }}" class="card-content" autocomplete="off">
				@csrf
				<div class="row">
					<div class="col s12">
						<div class="input-field col s12">
							<input id="nombre" name="nombre" type="text" required />
							<label for="nombre">Nombre</label>
						</div>
						<div class="input-field col s12 m12 l12 mb-0">
							<button type="submit" class="btn col s12">Agregar</button>
						</div>
					</div>
				</div>
			</form>
		</div>
</section>
@endsection