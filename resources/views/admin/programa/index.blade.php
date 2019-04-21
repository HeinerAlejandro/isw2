@extends('layouts.main-layout') 
@section('title') Programas
@endsection
 
@section('content') 

{{--
<div class="container">
	<p>Listado de programas</p>
	@foreach ($programas as $programa) {{$programa}}
	<br> @endforeach
</div>
--}}

<section id="list-programa">
	<div class="row container">
		<div class="col s12">
			<a href="{{ route('programa.create') }}" class="btn mt-1 mb-1">Agregar nuevo programa</a>
		</div>
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
					@foreach ($programas as $programa)
						<tr>
							<td>{{ $programa->nombre }}</td>
							<td>{{ $programa->coordinador }}</td>
							<td>{{ $programa->created_at }}</td>
							<td>{{ $programa->updated_at }}</td>
							<td></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>
@endsection