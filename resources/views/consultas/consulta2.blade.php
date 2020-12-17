@extends('layout.master')
    @section('content')
    



    <h1> cantidad de habitaciones por tipo que cuenta el hotel </h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col"># Tipo de Habitacion</th>
            <th scope="col">Numero de habitaciones</th>
           

        </tr>
    </thead>
    <tbody>
    @foreach($habitacion as $c)
      
            <tr>
            <td> {{ $c->id}} </td>

            <td> {{ $c->cant}} </td>
            
 
        
    @endforeach
    </tbody>
</table






    @stop