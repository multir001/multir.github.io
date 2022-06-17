@extends('layouts.app')

@section('template_title')
    {{ $facturacion->name ?? 'Show Facturacion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Facturacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facturacions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $facturacion->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $facturacion->hora }}
                        </div>
                        <div class="form-group">
                            <strong>Seleccion De Pago:</strong>
                            {{ $facturacion->seleccion_de_pago }}
                        </div>
                        <div class="form-group">
                            <strong>Productos:</strong>
                            {{ $facturacion->productos }}
                        </div>
                        <div class="form-group">
                            <strong>Valor De Cuenta:</strong>
                            {{ $facturacion->valor_de_cuenta }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Del Cliente:</strong>
                            {{ $facturacion->nombre_del_cliente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
