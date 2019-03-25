<?php

namespace App;

use Illuminate\ Database\ Eloquent\ Model;

class Cliente extends Model {

    protected $fillable = [
        'id_persona'
    ];

    public $timestamps = false;

    public function user() 
    {
        return $this->belongsTo('App\Persona');
    }

    public function cliente()
    {
        return $this->hasMany('App\Compra', 'id_cliente');
    }
}
