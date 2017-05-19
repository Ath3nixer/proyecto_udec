@extends('Lider.layouts.fonlid')
@section('content')
<h2 class="text-info">Asignar Solicitud</h2>
<div class="table table-bordered">
{!! Form::open(['url' => ''] , ['class' => 'form-horizontal'] ) !!}
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Tipo de Usuario')!!}
            {!! Form::select('size', ['1' => 'Lider', '2' => 'Monitor'], null,  ['class' => 'form-control'], ['placeholder' => 'Selecciona']) !!}
            <br>
        </div>
    </div>
        <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Fecha de solicitud')!!}
            {!! Form::date('dateeninfo', null, ['class' => 'form-control']) !!}
            <br>
        </div>
    </div>
        <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Asunto de solicitud')!!}
            {!! Form::text('celname', null, ['class' => 'form-control']) !!}
            <br>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
            {!! Form::submit('Mostrar solicitudes' , ['class' => 'btn btn-success btn-lg pull-right']) !!}
            <br>
        </div>
    </div>
    {!! Form::close() !!}
    <table class="table table-bordered">
    	<thead>
    		<th>Radicado</th>
    		<th>Tipo de Solicitud</th>
    		<th>Cliente</th>
    		<th>Fecha</th>
    		<th>Correo</th>
    		<th></th>
    	</thead>
    	<tbody>
    		<tr>
				<td>lsfdiu123</td>
				<td>Desarrollo</td>
				<td>tumtum</td>
				<td>3115441554</td>
				<td>algo@el.co</td>
				<td>{!! Form::checkbox('name', 'value', false)!!}</td>
			</tr>
    	</tbody>
    	<tfoot>
    		<th>Radicado</th>
    		<th>Tipo de Solicitud</th>
    		<th>Cliente</th>
    		<th>Fecha</th>
    		<th>Correo</th>
    		<th></th>
    	</tfoot>
    </table>
    <br>
    <h2>Monitores</h2>
    <table class="table table-bordered">
    	<thead>
    		<th>Nombre</th>
    		<th>Apellido</th>
    		<th>Correo</th>
    		<th>Celular</th>
    		<th>Sexo</th>
    		<th></th>
    	</thead>
    	<tbody>
    		<tr>
				<td>Arnold Isidro</td>
				<td>Nova Riaño</td>
				<td>Cleri0nova@gmail.com</td>
				<td>3115441554</td>
				<td>Masculino</td>
				<td>{!! Form::checkbox('name', 'value', false) !!}</td>
			</tr>
    	</tbody>
    	<tfoot>
    		<th>Nombre</th>
    		<th>Apellido</th>
    		<th>Correo</th>
    		<th>Celular</th>
    		<th>Sexo</th>
    		<th>
    {!!Form::submit('Asignar' , ['class' => 'btn btn-success'])!!}</th>
    	</tfoot>
    </table>
</div>
@endsection