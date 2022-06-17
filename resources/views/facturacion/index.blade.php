@extends('layouts.app')

@section('template_title')
    Facturacion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Facturacion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('facturacions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Fecha</th>
										<th>Hora</th>
										<th>Seleccion De Pago</th>
										<th>Productos</th>
										<th>Valor De Cuenta</th>
										<th>Nombre Del Cliente</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($facturacions as $facturacion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $facturacion->fecha }}</td>
											<td>{{ $facturacion->hora }}</td>
											<td>{{ $facturacion->seleccion_de_pago }}</td>
											<td>{{ $facturacion->productos }}</td>
											<td>{{ $facturacion->valor_de_cuenta }}</td>
											<td>{{ $facturacion->nombre_del_cliente }}</td>

                                            <td>
                                                <form action="{{ route('facturacions.destroy',$facturacion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('facturacions.show',$facturacion->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('facturacions.edit',$facturacion->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $facturacions->links() !!}
            </div>
        </div>
    </div>
@endsection
