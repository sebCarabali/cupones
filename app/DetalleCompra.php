<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    public $table = 'detallecompra';
    public $guarded = [
        'id'
    ];
    public $timestamps = false;
}
