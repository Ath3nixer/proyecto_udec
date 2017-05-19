@extends('admin.layouts.fonadm')
@section('content')
<h2 class="text-info">Horario Sala</h2>
<div class="col-sm-offset-2 col-sm-8 form-contacto">
        {!! Form::open(['url' => ''] , ['class' => 'form-horizontal'] ) !!}
        <div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">
                {!! Form::label('Salon')!!}
            	{!! Form::select('size', ['1' => 'Sala1', '2' => 'Sala2'], null,  ['class' => 'form-control'], ['placeholder' => 'Selecciona']) !!}
            </div>
        </div>
        <div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">
                {!! Form::label('Fecha')!!}
				{!! Form::date('dateininfo', null, ['class' => 'form-control']) !!}
    		</div>
        </div>
        <div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">
				{!! Form::label('Hora Inicial')!!}
                {!! Form::time('dateininfo', null, ['class' => 'form-control']) !!}
    		</div>
        </div>
        <div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">
				{!! Form::label('Hora Final')!!}
                {!! Form::time('dateininfo', null, ['class' => 'form-control']) !!}
    		</div>
        </div>
        <div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">
				<br>
                {!! Form::submit('Repetir semana' , ['class' => 'btn btn-success']) !!}
        	</div>
    	</div>
        <div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">
				{!! Form::label('Cantida de Semanas')!!}
                {!! Form::number('name', 'value', ['class' => 'form-control']) !!}
    		</div>
        </div>
        <div class="form-group btn-group-">
        	<div class="col-xs-offset-1 col-sm-10">
            <br>
            	{!! Form::submit('Mostrar horario' , ['class' => 'btn btn-success']) !!}
                {!! Form::submit('Agregar horario' , ['class' => 'btn btn-success pull-right']) !!}
                </div>
        </div>
	{!! Form::close() !!}
</div>
@endsection