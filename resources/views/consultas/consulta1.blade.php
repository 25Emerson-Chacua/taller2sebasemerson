@extends('layout.master')
    @section('content')
    



    <h1> consultas NO tienen fecha de salida </h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col"># Factura</th>
            <th scope="col">Numero Habitacion</th>
            <th scope="col">id precio </th>
            <th scope="col">Tipo </th>
            <th scope="col">Precio</th>

        </tr>
    </thead>
    <tbody>
    @foreach($facturas as $c)
      
            <tr>
            <td> {{ $c->CodigoF }} </td>
            <td> {{ $c->Numero }} </td>
            <td> {{ $c->id }} </td>
            <td> {{ $c->Tipo }}</td>
            
            <td> {{ $c->precio }} </td>
            </tr>
        
    @endforeach
    </tbody>
</table






    @stop