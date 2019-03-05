<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aliado extends Model
{
    public $table = "aliado";
    public $timestamps = false;

    protected $guarded = ['id'];

    public function disenadores()
    {
        return $this->belongsToMany('App\Disenador', 'aliado_disenador', 'id_aliado', 'id_disenador');
    }
}
