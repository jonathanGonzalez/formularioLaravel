

@extends('layouts.app')

@section('titulo')
    <span>hola desde las vistas :)</span>   
    {!! Form::open(['url' => 'foo/bar']) !!}

    {!! Form::label('email_lbl', 'E-Mail Address', ['class' => 'form-control']); !!}
    {!! Form::text('email_txt', 'example@gmail.com', ['class' => 'form-control']); !!}
    <br>
    {!! Form::label('Fecha_lbl', 'Fecha de nacimiento', ['class' => 'form-control']); !!}
    {!! Form::date('fecha_date', \Carbon\Carbon::now()); !!}
        
    {!! Form::close() !!}    
@stop

@section('formularioActivo')
 active
@stop







