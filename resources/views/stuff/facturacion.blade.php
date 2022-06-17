@extends('layouts.app')

@section('content')
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Fecha</th>
        <th scope="col">Hora</th>
        <th scope="col">Pago</th>
        <th scope="col">productos</th>
        <th scope="col">Total</th>
        <th scope="col">Cliente</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach (  $facturaciones as $item)
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->fecha}}</td>
        <td>{{$item->hora}}</td>
        <td>{{$item->seleccion_de_pago}}</td>
        <td>{{$item->productos}}</td>
        <td>{{$item->valor_de_cuenta}}</td>
        <td>{{$item->nombre_del_cliente}}</td>
      </tr>

        @endforeach
    </tbody>
  </table>
@endsection
