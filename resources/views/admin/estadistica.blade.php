@extends('admin.layouts.fonadm')
@section('content')

<h2 class="text-info">Estadisticas Centro TIC</h2>
<div class="col-sm-offset-2 col-sm-8 form-contacto">
    {!! Form::open(['url' => ''] , ['class' => 'form-horizontal'] ) !!}
    <div class="form-group">
    	<div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Fecha a editar')!!}
            {!! Form::select('size', ['1' => 'Internos/Externos', '2' => 'Usuarios'], null,  ['class' => 'form-control'], ['placeholder' => 'Selecciona']) !!}
		</div>
    </div>
	<div class="form-group">
    	<div class="col-xs-offset-1 col-sm-10">
            {!! Form::submit('Editar Horario' , ['class' => 'btn btn-success']) !!}
		</div>
    </div>
	{!! Form::close() !!}
</div>   
@endsection