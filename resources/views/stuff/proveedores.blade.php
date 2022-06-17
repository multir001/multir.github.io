@extends('layouts.app')

@section('content')
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">nombre del proveedor</th>
        <th scope="col">tipo de pago</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ( $proveedores  as $item)
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->nombre}}</td>
        <td>{{$item->tipo_de_pago}}</td>
      </tr>

        @endforeach
    </tbody>
  </table>

@endsection
