@extends('Monitor.layouts.fonmon')
@section('content')
<h2 class="text-info">Perfil</h2>
<div class="col-sm-offset-2 col-sm-8 form-contacto">
{!! Form::open(['url' => ''] , ['class' => 'form-horizontal'] ) !!}
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
            {!! Form::label('Contraseña')!!}
            {!! Form::password('contrasena', ['class' => 'form-control'])!!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10"> 
            {!! Form::label('Direccion')!!}
            {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10"> 
            {!! Form::label('Celular')!!}
            {!! Form::text('celular', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
        <br>
            {!! Form::submit('Modificar' , ['class' => 'btn btn-success btn-lg pull-right']) !!}
        </div>
    </div>
{!! Form::close() !!}
</div>
@endsection
