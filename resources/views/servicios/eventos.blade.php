

@extends('layout.master')
    
    @section('content')

             <!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">

<div class="carousel-inner" role="listbox">
  <div class="carousel-item active">
    <div class="view">
      <img class="d-block w-100" src="{{ url('/imagenes/13.jpg') }}" height="250" alt="First slide">
      <div class="mask rgba-black-light"></div>
    </div>
    <div class="carousel-caption">
      <h3 class="h3-responsive">Eventos: {{ $id }}</h3>
    </div>
  </div>
</div>
</div>
<!--/.Carousel Wrapper-->
@stop