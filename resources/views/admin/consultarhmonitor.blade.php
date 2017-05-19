@extends('admin.layouts.fonadm')
@section('content')
<h2 class="text-info">Horarios Monitores</h2>
<div class="col-sm-offset-2 col-sm-8 form-contacto">
    {!! Form::open(['url' => ''] , ['class' => 'form-horizontal'] ) !!}
    <div class="form-group">
    	<div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Seleccione el monitor')!!}
            {!! Form::select('size', ['1' => 'Monitor1', '2' => 'Monitor2'], null,  ['class' => 'form-control'], ['placeholder' => 'Selecciona']) !!}
		</div>
    </div>
    <div class="form-group">
    	<div class="col-xs-offset-1 col-sm-10">
    	<br>
            {!! Form::submit('Mostrar Horario' , ['class' => 'btn btn-success']) !!}
            {!! Form::submit('Editar Horario' , ['class' => 'btn btn-success']) !!}
            {!! Form::submit('Agregar Horario' , ['class' => 'btn btn-success']) !!}
		</div>
    </div>
	{!! Form::close() !!}
</div>
<div class="col-sm-offset-2 col-sm-8 form-contacto">
    {!! Form::open(['url' => ''] , ['class' => 'form-horizontal'] ) !!}
    <div class="form-group">
    	<div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Fecha a editar')!!}
            {!! Form::date('dateininfo', null, ['class' => 'form-control']) !!}
		</div>
    </div>
    <div class="form-group">
    	<div class="col-xs-offset-1 col-sm-10">
    	<br>
            {!! Form::submit('Editar Horario' , ['class' => 'btn btn-success']) !!}
		</div>
    </div>
	{!! Form::close() !!}
</div>    
@endsection