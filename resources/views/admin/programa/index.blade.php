@extends('layouts.main-layout')

@section('title')
Programas
@endsection

@section('content')
<div class="container">
	<p>Listado de programas</p>
    @foreach ($programas as $programa)
    	{{$programa}}
    	<br>
    @endforeach
</div>
@endsection