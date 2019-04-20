@extends('layouts.main-layout') 
@section('title') Programa agregado
@endsection
 
@section('content') {{--
<div class="container">
	<p>Programa agregado</p>
	{{$programa}}
</div>
--}}

<div class="row container">
	<div class="col s12">
		<table>
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Coordinador</th>
					<th>Creado el</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>{{ $programa->nombre }}</td>
					<td>{{ $programa->coordinador }}</td>
					<td>{{ $programa->created_at }}</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection