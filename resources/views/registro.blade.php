@extends('layouts.fonusers')
@section('content')
<h1 class="text-center">Centro TIC</h1>
<h2 class="text-info">Registro</h2>
<hr>
<p>Llene el siguiente formulario para registrese.</p>
<div class="col-sm-offset-2 col-sm-8 form-contacto">
{!! Form::open(['url' => ''] , ['class' => 'form-horizontal'] ) !!}
        <div class="form-group">
            <div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Tipo de Usuario')!!}
            {!! Form::select('size', ['1' => 'Todos', '2' => 'Uno'], null,  ['class' => 'form-control'], ['placeholder' => 'Selecciona']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Tipo de Documento')!!}
            {!! Form::select('size', ['$tipodoc'], null,  ['class' => 'form-control'], ['placeholder' => 'Selecciona']) !!}
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
            {!! Form::label('Nombres*')!!}
            {!! Form::text('celname', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Apellidos*')!!}
            {!! Form::text('celname', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-1 col-sm-10"> 
            {!! Form::label('Email*')!!}
            {!! Form::text('celname', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-1 col-sm-10"> 
            {!! Form::label('Dirección*')!!}
            {!! Form::text('celname', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-1 col-sm-10"> 
            {!! Form::label('Celular*')!!}
            {!! Form::number('name', 'value' , ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Sexo')!!}
            {!! Form::select('size', ['1' => 'Todos', '2' => 'Uno'], null,  ['class' => 'form-control'], ['placeholder' => 'Selecciona']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-1 col-sm-10"> 
            {!! Form::label('Fecha de Nacimiento*')!!}
            {!! Form::date('dateininfo', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-1 col-sm-10"> 
            {!! Form::label('Código Estudiantil**')!!}
            {!! Form::number('name', 'value', ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-1 col-sm-10"> 
            {!! Form::label('Razon Social')!!}
            {!! Form::text('celname', null, ['class' => 'form-control']) !!}
            </div>
        </div>        
    <h6 class="col-xs-offset-1">Los campos marcados con (*) son obligatorios</h6>
    <h6 class="col-xs-offset-1">Los campos marcados con (**) deben ser diligenciados solo por estudiantes de la Universidad de Cundinamarca</h6>
    <h6 class="col-xs-offset-1">--La contraseña les llegará al correo que registraron.</h6>
        <div class="form-group">
            <div class="col-xs-offset-1 col-sm-10">
                {!! Form::submit('Registrar' , ['class' => 'btn btn-success btn-lg pull-right']) !!}
            </div>
        </div>
    {!! Form::close() !!}
</div>
@endsection