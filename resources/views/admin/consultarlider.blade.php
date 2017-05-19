@extends('admin.layouts.fonadm')
@section('content')
<h2 class="text-info">Consulta Líderes</h2>
<div class="table table-bordered">
    <table>
    	<thead>
    		<th>Nombre</th>
    		<th>Apellido</th>
    		<th>Correo</th>
    		<th>Celular</th>
    		<th>Sexo</th>
    		<th>-----</th>
    	</thead>
    	<tbody>
        @foreach ($cuentas as $cuenta)
            <tr>
                <td>{{ $cuenta->nombre}}</td>
                <td>{{ $cuenta->apellido}}</td>
                <td>{{ $cuenta->email}}</td>
                <td>{{ $cuenta->celular}}</td>
                <td>{{ $cuenta->sexo}}</td>
                <td>{!! Form::submit('Ver Mas' , ['class' => 'btn btn-success']) !!}</td>
            </tr>
        @endforeach
    	</tbody>
    	<tfoot>
    		<th>Nombre</th>
    		<th>Apellido</th>
    		<th>Correo</th>
    		<th>Celular</th>
    		<th>Sexo</th>
    		<th>-----</th>
    	</tfoot>
    </table>
</div>
@endsection