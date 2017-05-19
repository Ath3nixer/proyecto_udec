@extends('admin.layouts.fonadm')
@section('content')
<h2 class="text-info">Modificar Horario Monitor</h2>
<div class="col-sm-offset-2 col-sm-8 form-contacto">
    {!! Form::open(['url' => ''] , ['class' => 'form-horizontal'] ) !!}
        <div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">
                {!! Form::label('Seleccione el Monitor')!!}
            	{!! Form::select('size', ['1' => 'Monitor1', '2' => 'Monitor2'], null,  ['class' => 'form-control'], ['placeholder' => 'Selecciona']) !!}
            </div>
        </div>
        <div class="form-group btn-group-" align="center">
        	<div class="col-xs-offset-1 col-sm-10">
                {!! Form::submit('Mostrar Horario' , ['class' => 'btn btn-success']) !!}
                {!! Form::submit('Agregar Horario' , ['class' => 'btn btn-success']) !!}
                {!! Form::submit('Modificar Horario' , ['class' => 'btn btn-success']) !!}
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
				{!! Form::label('Fecha a Modificar')!!}
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
				{!! Form::submit('Agregar/Modificar' , ['class' => 'btn btn-success']) !!}
        	</div>
    	</div>
    {!! Form::close() !!}
</div>
@endsection