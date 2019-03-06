<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
    public $table = 'cupon';
    public $guarded = ['id'];
    public $timestamps = false;

    public function categoria()
    {
        return $this->belongsTo('App\Categoria', 'id_categoria');
    }

    public function aliado()
    {
        return $this->belongsTo('App\Aliado', 'id_aliado');
    }
}
