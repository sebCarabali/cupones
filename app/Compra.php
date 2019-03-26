<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    public $table = 'compra';
    public $guarded = [
        'id'
    ];
    public $timestamps = false;

    public function cupones()
    {
        return $this->belongsToMany('App\Cupon', 'detallecompra', 'id_compra');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Cliente', 'id_cliente');
    }

    public function invitado()
    {
        return $this->belognsTo('App\Invitado', 'id_invitado');
    }
}
