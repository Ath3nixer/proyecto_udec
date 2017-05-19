@extends('Monitor.layouts.fonmon')
@section('content')
<table class="table table-bordered">
	<thead>
		<th>Tarea</th>
		<th>Fecha Creacion</th>
		<th>Fecha Limite</th>
		<th></th>
	</thead>
	<tbody>
		<tr>
			<td>crear...</td>
			<td>10/05/2014</td>
			<td>10/06/2014</td>
			<td>{!! Form::submit('Ver Más' , ['class' => 'btn btn']) !!}</td>
		</tr>
	</tbody>
</table>
@endsection