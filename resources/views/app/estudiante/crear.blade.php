@extends('app.layouts.app')

@section('title', 'Nuevo Estudiante')

@section('content')
	<div class="col-lg-10 col-lg-offset-1">
		<h2>FORMULARIO DE REGISTRO NUEVO ESTUDIANTE</h2>
		{{ Form::open(['route' => 'estudiantes.store', 'method' => 'post', 'role' => 'form']) }}
			<div class="col-lg-6">
				<div class="form-group">
					{{ Form::label('codigo', 'CODIGO') }}
					{{ Form::text('codigo', old('codigo'), ['class' => 'form-control', 'required' => 'true', 'minlength' => '3']) }}
				</div>

				<div class="form-group">
					{{ Form::label('nombres', 'NOMBRES') }}
					{{ Form::text('nombres', old('nombres'), ['class' => 'form-control', 'required' => 'true', 'minlength' => '3']) }}
				</div>

			</div>
			
			<div class="col-lg-6">
				<div class="form-group">
					{{ Form::label('apellidos', 'APELLIDOS') }}
					{{ Form::text('apellidos', old('apellidos'), ['class' => 'form-control', 'required' => 'true', 'minlength' => '3']) }}
				</div>
				
				<div class="form-group">
					{{ Form::label('sexo', 'SEXO') }}
					{{ Form::select('sexo', ['1'=> 'F', '2' => 'M'], ['class' => 'form-control']) }}
				</div>
			</div>

			<div class="col-lg-12">
				<div class="form-group">
					<a href="{{ route('estudiantes.index') }}" class="btn btn-danger">CANCELAR</a>
					<button type="submit" class="btn btn-success">GUARDAR</button>			
				</div>
			</div>
			
			

		{{ Form::close() }}
		
	</div>

@endsection