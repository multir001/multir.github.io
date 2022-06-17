<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Facturacion
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $fecha
 * @property $hora
 * @property $seleccion_de_pago
 * @property $productos
 * @property $valor_de_cuenta
 * @property $nombre_del_cliente
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Facturacion extends Model
{
    protected $guarded = [];
}
