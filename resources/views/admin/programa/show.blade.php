@extends('layouts.main-layout') 
@section('title') Programa - {{ $programa->nombre }}
@endsection
 
@section('table')
	<div class="row container">
		<div class="col s12">
			<table>
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Coordinador</th>
						<th>Creado el</th>
						<th>Actualizado el</th>
						<th>Opciones</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>{{ $programa->nombre }}</td>
						<td>{{ $programa->coordinador }}</td>
						<td>{{ $programa->created_at }}</td>
						<td>{{ $programa->updated_at }}</td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
@endsection
 
@section('content')
	<div class="container">
		@if ($programa == NULL)
			<span class="invalid-feedback" role="alert">
				<strong>No existe el programa solicitado.</strong>
			</span> 
		@else 
			@yield('table') 
		@endif
	</div>
@endsection