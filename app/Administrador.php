<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    public $table = "administrador";
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\Persona');
    }
}
