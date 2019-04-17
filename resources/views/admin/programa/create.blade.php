@extends('layouts.main-layout')

@section('title')
Agregar Programa
@endsection

@section('content')
<div class="container">
      <div class="row">
	    <form method="POST" action="{{ route('programa.store') }}" class="col s12">
	    	@csrf
		    <div class="row">
		        <div class="input-field col s12">
		          	<input id="nombre" name="nombre" type="text" class="validate">
		          	<label for="nombre">Nombre</label>
		          	@if ($errors->has('nombre'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
		       	</div>
		    </div>
	        <button class="btn waves-effect waves-light" type="submit">Agregar
		    	<i class="material-icons right">send</i>
		    </button>
	    </form>
	  </div>
</div>
@endsection
