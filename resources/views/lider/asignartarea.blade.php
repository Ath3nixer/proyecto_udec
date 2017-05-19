@extends('Lider.layouts.fonlid')
@section('content')
<h2 class="text-info">Asignar Tareas</h2>
<div class="col-sm-offset-2 col-sm-8 form-contacto">
{!! Form::open(['url' => ''] , ['class' => 'form-horizontal'] ) !!}
        <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
            <table class="table table-bordered">
    	<thead>
    		<th>Nombre / Apellido</th>
    		<th>Correo</th>
    		<th></th>
    	</thead>
    	<tbody>
    		<tr>
				<td>Arnold Isidro Nova Riaño</td>
				<td>Cleri0nova@gmail.com</td>
				<td>{!! Form::checkbox('name', 'value', false) !!}</td>
			</tr>
    		<tr>
				<td>Arnold Isidro Nova Riaño</td>
				<td>Cleri0nova@gmail.com</td>
				<td>{!! Form::checkbox('name', 'value', false) !!}</td>
			</tr>
    		<tr>
				<td>Arnold Isidro Nova Riaño</td>
				<td>Cleri0nova@gmail.com</td>
				<td>{!! Form::checkbox('name', 'value', false) !!}</td>
			</tr>
    		<tr>
				<td>Arnold Isidro Nova Riaño</td>
				<td>Cleri0nova@gmail.com</td>
				<td>{!! Form::checkbox('name', 'value', false) !!}</td>
			</tr>
    	</tbody>
    </table>
            <br>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Fecha Limite')!!}
            {!! Form::date('dateeninfo', null, ['class' => 'form-control']) !!}
            <br>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Hora Limite')!!}
            {!! Form::time('dateeninfo', null, ['class' => 'form-control']) !!}
            <br>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Tarea')!!}
            {!! Form::textarea('celname', null, ['class' => 'form-control']) !!}
            <br>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
            {!! Form::submit('Enviar' , ['class' => 'btn btn-success btn-lg pull-right']) !!}
            <br>
        </div>
    </div>
{!! Form::close() !!}
</div>

@endsection