@extends('app.layouts.app')

@section('title', 'Estudiantes')

@section('content')
	<div class="col-lg-10 col-lg-offset-1">
	<h2><a href="{{ route('estudiantes.create') }}" class="btn btn-primary">Nuevo</a> LISTA DE ESTUDIANTES</h2>
		<table class="table table-bordered">
			<thead>
				<th>CODIGO</th>
				<th>NOMBRES</th>
				<th>APELLIDOS</th>
				<th>SEXO</th>
				<th>-----</th>
			</thead>
			<tbody>
				@foreach ($estudiantes as $estudiante)
					<tr>
						<td>{{ $estudiante->codigo }}</td>
						<td>{{ $estudiante->nombres }}</td>
						<td>{{ $estudiante->apellidos }}</td>
						<td>{{ $estudiante->sexo }}</td>
						<td>
							<a href="#" class="btn btn-warning btn-xs">Editar</a>
							<a href="#" class="btn btn-danger btn-xs">Eliminar</a>
						</td>
					</tr>
				@endforeach				
			</tbody>
		</table>
		
	</div>

@endsection