@extends('admin.layouts.fonadm')
@section('content')
<h2 class="text-info">Registro de Monitor / Líder</h2>
<div class="col-sm-offset-2 col-sm-8 form-contacto">
{!! Form::open(['route' => 'cuentas.store', 'method' => 'post'] , ['class' => 'form-horizontal'] ) !!}
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Rol')!!}
            {!! Form::select('rol', ['1' => 'Líder', '2' => 'Monitor'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Tipo de Documento')!!}
            {!! Form::select('size', ['$cuenta'], null,  ['class' => 'form-control'], ['placeholder' => 'Selecciona']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Número de Documento*')!!}
            {!! Form::number('name', 'value', ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Nombre')!!}
            {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Apellido')!!}
            {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10"> 
            {!! Form::label('Email')!!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10"> 
            {!! Form::label('Dirección')!!}
            {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10"> 
            {!! Form::label('Celular')!!}
            {!! Form::number('celular', 'value' , ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Sexo')!!}
            {!! Form::select('sexo', ['1' => 'Todos', '2' => 'Uno'], null,  ['class' => 'form-control'], ['placeholder' => 'Selecciona']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10"> 
            {!! Form::label('Fecha de Nacimiento')!!}
            {!! Form::date('fechanac', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        	<div class="col-xs-offset-1 col-sm-10">
            <br>
                {!! Form::submit('Registrar' , ['class' => 'btn btn-success btn-lg pull-right']) !!}
            </div>
    	</div>
	</form>
</div>
@endsection