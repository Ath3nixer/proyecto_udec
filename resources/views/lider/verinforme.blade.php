@extends('Lider.layouts.fonlid')
@section('content')
<h2 class="text-info">Ver Informes</h2>
<div class="col-sm-offset-2 col-sm-8 form-contacto">
{!! Form::open(['url' => ''] , ['class' => 'form-horizontal'] ) !!}
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Cantidad de Usuarios')!!}
            {!! Form::select('size', ['1' => 'Todos', '2' => 'Uno'], null,  ['class' => 'form-control'], ['placeholder' => 'Selecciona']) !!}
            <br>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Fecha Inicial')!!}
            {!! Form::date('dateininfo', null, ['class' => 'form-control']) !!}
            <br>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Fecha Final')!!}
            {!! Form::date('dateeninfo', null, ['class' => 'form-control']) !!}
            <br>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
            {!! Form::label('Cedula o Nombre')!!}
            {!! Form::text('celname', null, ['class' => 'form-control']) !!}
            <br>
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-1 col-sm-10">
            {!! Form::submit('Mostrar' , ['class' => 'btn btn-success btn-lg pull-right']) !!}
            <br>
        </div>
    </div>
{!! Form::close() !!}
</div>
@endsection