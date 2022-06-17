@extends('layouts.app')

@section('content')
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre del Usuario</th>
        <th scope="col">Mesa</th>
        <th scope="col">Codigo de Reservacion</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach (   $reservas as $item)
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->nombre}}</td>
        <td>{{$item->mesa}}</td>
        <td>{{$item->codigo}}</td>
      </tr>

        @endforeach
    </tbody>
  </table>
@endsection
