@extends('layout.master')
    @section('content')

     <!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">

  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="{{ url('/imagenes/12.jpg') }}" height="250" alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Habitaciones tipo Estándar,Superior, Ejecutiva, Suite</h3>
      </div>
    </div>
  </div>
</div>


<div class="container" name="buscar"> 
<h5 class="h3-responsive" align="center"> Listado de Habitaciones</h5>
<div class="row">
@foreach($habitacion as $p)
<div class="col-md-4">
    <div class="card" style="width: 15rem;">
        <img src='{{url("/img/img/$p->foto")}}' class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"> {{ $p->Tipo}} </h5>
            <p class="card-text" align="justify"> Número de Habitación: {{$p->Numero}} </p>
            <p class="card-text" align="justify"> Descripción: {{$p->descripcion}} </p>
            <p class="card-text" align="justify">Número de camas: {{$p->numCamas}} </p>
            <p class="card-text" align="justify">Precio: {{$p->precio}} </p>
            <a href="#" class="btn btn-primary">Reservar</a><br><br>
        </div>
    </div>
</div>
@endforeach
<br><br>
<div class="col-md-12" align="center">
   <a href="{{url('/')}}" class="btn btn-secondary">Regresar</a>
</div>   
</div>
</div>
<!--/.Carousel Wrapper-->
    @stop