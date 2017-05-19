@extends('Lider.layouts.fonlid')
@section('content')
<h2>Solicitudes en curso</h2>
<table class="table table-bordered">
    	<thead>
    		<th>Radicado</th>
    		<th>Tipo de Solicitud</th>
    		<th>Estado</th>
    		<th>Fecha</th>
    		<th>Correo</th>
    		<th>Ver Solicitud</th>
    		<th>Estado Solicitud</th>
    	</thead>
    	<tbody>
    		<tr>
				<td>lsfdiu123</td>
				<td>Desarrollo</td>
				<td>tumtum</td>
				<td>3115441554</td>
				<td>algo@el.co</td>
				<td>{!! Form::submit('Ver' , ['class' => 'btn btn-success'])!!}</td>
				<td>{!! Form::submit('Cambiar' , ['class' => 'btn btn-success'])!!}</td>
			</tr>
    	</tbody>
    </table>
@endsection