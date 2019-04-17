@extends('layouts.main-layout')

@section('title')

@endsection

@section('content')
<div class="container">
    @if ($programa == NULL)
	    <span class="invalid-feedback" role="alert">
	        <strong>No existe el programa solicitado.</strong>
	    </span>
	@else
    	{{$programa}}
	@endif
</div>
@endsection
