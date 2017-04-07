@extends('layouts.app')

@section('titulo')
Las mejores recetas.
@stop

@section('contenido')
<div class="row text-center">
    <p>Te invitamos a responder nuestra encuesta para mejorar el servicio que brindamos</p>
    <a class="btn btn-primary" href="{!! url('formulario') !!}"> responder encuesta de satisfacción</a><br>
    <p>
</div>
<div class="row">
  <div class="col-sm-12 col-md-4">
    <div class="thumbnail">
      <img class="img-responsive full-w" src="{!! asset('img/hamburguesa.jpg') !!}" alt="...">
      <div class="caption">
        <h3 class="text-center">Hamburguesas</h3>
        <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.</p>
        <p class="text-center"><a href="#" class="btn btn-primary" role="button">calificar servicio</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-12 col-md-4">
    <div class="thumbnail">
      <img class="img-responsive full-w" src="{!! asset('img/burros.jpg') !!}" alt="...">
      <div class="caption">
        <h3 class="text-center">Burros</h3>
        <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.</p>
        <p class="text-center"><a href="#" class="btn btn-primary" role="button">calificar servicio</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-12 col-md-4">
    <div class="thumbnail">
      <img class="img-responsive full-w" src="{!! asset('img/patacon.jpg') !!}" alt="...">
      <div class="caption">
        <h3 class="text-center">Patacones</h3>
        <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.</p>
        <p class="text-center"><a href="#" class="btn btn-primary" role="button">servicio servicio</a></p>
      </div>
    </div>
  </div>

  
</div>
@stop


@section('indexActivo')
 active
@stop