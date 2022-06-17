<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $facturacion->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hora') }}
            {{ Form::text('hora', $facturacion->hora, ['class' => 'form-control' . ($errors->has('hora') ? ' is-invalid' : ''), 'placeholder' => 'Hora']) }}
            {!! $errors->first('hora', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('seleccion_de_pago') }}
            {{ Form::text('seleccion_de_pago', $facturacion->seleccion_de_pago, ['class' => 'form-control' . ($errors->has('seleccion_de_pago') ? ' is-invalid' : ''), 'placeholder' => 'Seleccion De Pago']) }}
            {!! $errors->first('seleccion_de_pago', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('productos') }}
            {{ Form::text('productos', $facturacion->productos, ['class' => 'form-control' . ($errors->has('productos') ? ' is-invalid' : ''), 'placeholder' => 'Productos']) }}
            {!! $errors->first('productos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('valor_de_cuenta') }}
            {{ Form::text('valor_de_cuenta', $facturacion->valor_de_cuenta, ['class' => 'form-control' . ($errors->has('valor_de_cuenta') ? ' is-invalid' : ''), 'placeholder' => 'Valor De Cuenta']) }}
            {!! $errors->first('valor_de_cuenta', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_del_cliente') }}
            {{ Form::text('nombre_del_cliente', $facturacion->nombre_del_cliente, ['class' => 'form-control' . ($errors->has('nombre_del_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Del Cliente']) }}
            {!! $errors->first('nombre_del_cliente', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>