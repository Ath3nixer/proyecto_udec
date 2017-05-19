@extends('Lider.layouts.fonlid')
@section('content')
<h2 class="text-info">Informes</h2>
<hr>
<div class="col-sm-offset-2 col-sm-8 form-contacto">
    {!! Form::open(['url' => ''] , ['class' => 'form-horizontal'] ) !!}
    	<div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">
                {!! Form::label('Asunto')!!}
				{!! Form::text('celname', null, ['class' => 'form-control']) !!}
    		</div>
    	</div>
        
        <div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Adjuntar Archivo')!!}
            {!! Form::file('icon') !!}
            </div>
        </div>
        
        <div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">    	
				{!! Form::label('Observaciones')!!}
				{!! Form::textarea('celname', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    	<div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">
				{!! Form::submit('Enviar' , ['class' => 'btn btn-success btn-lg pull-right']) !!}
        	</div>
    	</div>
    {!! Form::close() !!}
</div>
@endsection