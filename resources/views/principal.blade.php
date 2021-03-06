<!DOCTYPE html>
@extends('layout.master')
    @section('content')


    <body background="{{url('img/fondo.jpg')}}">
        <div class="container" align="center">
            <h1 style="color: white"> ¡BIENVENIDOS AL HOTEL LA RIVIERA! </h1>
            <h5 style="color: white;"><br>La mejor manera de encontrarte a ti mismo es perderte en el servicio a los demás</h5>

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{url('img/3.jpg')}}" class="d-block w-100" alt="..." height="500">
                    <div class="carousel-caption d-none d-md-block">
                        <h1> &#x2655;</h1>
                        <p><h4>Danos el gusto de atenderte</h4></p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="{{url('img/2.jpg')}}" class="d-block w-100" alt="..." height="500">
                    <div class="carousel-caption d-none d-md-block">
                        <h1> &#x2655;</h1>
                        <p><h4>Simplemente relajante</h4></p>
                    </div>
                    </div>
                    <div class="carousel-item">
                    <img src="{{url('img/1.jpg')}}" class="d-block w-100" alt="..." height="500">
                    <div class="carousel-caption d-none d-md-block">
                        <h1> &#x2655;</h1>
                        <p><h4>Sienteté como en casa</h4></p> 
                    </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <br><br>
            <img src="{{url('img/corona.png')}}" height="100">

            <br><br>
        </div>
    </body>

    @stop