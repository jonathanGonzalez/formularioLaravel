@extends('layouts.app')

@section('formularioActivo')
 active
@stop

@section('titulo')
    <span>Encuesta</span><br>   
@stop

@section('contenido')   
    {!! Form::open(['action' => 'FormularioController@enviar']) !!}
    
    {!! Form::label('p1_lbl','¿volvería a nuestro restaurante?');!!}       
    {!! Form::label('p1_lbl','si');!!}       
    {!! Form::radio('name', 'value', true); !!}
    {!! Form::label('p1_lbl','no');!!}           
    {!! Form::radio('name', 'value', false); !!}

    <br>
    <br>
    <br>

    {!! Form::label('positivo_lbl', '¿Qué fue lo mejor de su visita a nuestro restaurante?'); !!}
    {!! Form::textarea('email_txt', '', ['class' => 'form-control']); !!}

    <br>

    {!! Form::label('positivo_lbl', '¿Qué no le gusto del restaurante?'); !!}
    {!! Form::textarea('email_txt', '', ['class' => 'form-control']); !!}

    <br>
    <br>

    {!! Form::label('p1_lbl','Desea recibir correos con información de promociones?');!!}       
    {!! Form::label('p1_lbl','si');!!}       
    {!! Form::radio('name', 'value', true); !!}
    {!! Form::label('p1_lbl','no');!!}           
    {!! Form::radio('name', 'value', false); !!}

    <br>
    <br>

    {!! Form::label('email_lbl', 'E-Mail Address:'); !!}
    {!! Form::text('email_txt', 'ejemplo@example.com', ['class' => 'form-control']); !!}

    <br>
    <br>

    {!! Form::label('Fecha_lbl', 'Cuándo fué su última visita:'); !!}
    {!! Form::date('fecha_date', \Carbon\Carbon::now()); !!}

    <br>
    <br>
    
    {!! Form::label('Fecha_lbl', 'Qué fué lo que más le gusto del restaurante:'); !!}
    {!! Form::select('size', ['c' => 'La comida', 'S' => 'El servicio', 'n' => 'nada'], 'S'); !!}

    <br>
    <br>
    
    {!! Form::label('Fecha_lbl', 'Que prefiere en un restaurantes de comida rapidas'); !!}
    {!! Form::select('size', ['t' => 'tiempos cortos', 'p' => 'buena presentación de la comida', 'd' => 'las dos'], 'S'); !!}

    <br>
    <br>    

    {!! Form::label('Ha leido los términos y condiciones', '');!!}
    {!! Form::checkbox('name', 'value', true); !!}

    <br>
    <br>
    
    {!! Form::submit('enviar encuesta', ['class' => 'btn btn-primary'])!!}

    <br>
    <br>
        
    {!! Form::close() !!}    
@stop








