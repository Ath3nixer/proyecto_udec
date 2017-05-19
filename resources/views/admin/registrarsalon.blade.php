@extends('admin.layouts.fonadm')
@section('content')
<h2 class="text-info">Registro de Salón</h2>
<div class="col-sm-offset-2 col-sm-8 form-contacto">
    {!! Form::open(['url' => ''] , ['class' => 'form-horizontal'] ) !!}
        <div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">
                {!! Form::label('Número de Salon')!!}
                {!! Form::number('name', 'value', ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">
            	{!! Form::label('Programa')!!}
                {!! Form::select('size', ['1' => 'Ingenieria', '2' => 'Contaduria', '3' => 'Administración', '4' => 'Zootecnia'], null,  ['class' => 'form-control'], ['placeholder' => 'Selecciona']) !!}
            </div>
        </div>
        <div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">
				{!! Form::label('Nombre del salon')!!}
                {!! Form::text('celname', null, ['class' => 'form-control']) !!}
    		</div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-1 col-sm-10">
				{!! Form::label('Cantidad de equipos')!!}
                {!! Form::number('name', 'value', ['class' => 'form-control']) !!}
    		</div>
    	</div>
        <div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">
            	{!! Form::label('Lugar')!!}
                {!! Form::select('size', ['1' => 'Ubaté', '2' => 'Chía', '3' => 'Zipaquira', '4' => 'Facatativa', '5' => 'Fusagasuga', '6' => 'Girardot', '7' => 'Soacha'], null,  ['class' => 'form-control'], ['placeholder' => 'Selecciona']) !!}
            </div>
        </div>
        <div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">    	
				{!! Form::label('Descripcion de Salon')!!}
                {!! Form::textarea('descripcionsala', null, ['class' => 'form-control']) !!}
            </div>
        </div> 
        <div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">
			    {!! Form::submit('Registrar' , ['class' => 'btn btn-success btn-lg pull-right']) !!}
            </div>
    	</div>
    {!! Form::close() !!}
</div>
@endsection