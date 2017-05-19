@extends('admin.layouts.fonadm')
@section('content')
<h2 class="text-info">Generar Tipo de Solicitud</h2>
<div class="col-sm-offset-2 col-sm-8 form-contacto">
    {!! Form::open(['url' => ''] , ['class' => 'form-horizontal'] ) !!}
        <div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">
				{!! Form::label('Nombre de la Solicitud')!!}
				{!! Form::text('nomsoli', null, ['class' => 'form-control']) !!}
    		</div>
        </div>
        <div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">	
			<br>	
                {!! Form::label('Icono')!!}
				{!! Form::file('icon') !!}
            </div>
        </div>
        <div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">
            <br>
				{!! Form::label('Descripcion')!!}
                {!! Form::textarea('descsoli', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">
            <br>
                {!! Form::submit('Registrar' , ['class' => 'btn btn-success btn-lg pull-right']) !!}
        	</div>
    	</div>
    {!! Form::close() !!}
</div>
@endsection