<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitado extends Model
{
    public $table = 'invitado';
    public $guarded = [
        'id'
    ];
    public $timestamps = false;

    public function compras()
    {
        return $this->hasMany('App\Compra', 'id_invitado');
    }
}
