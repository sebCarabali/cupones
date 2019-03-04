<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disenador extends Model
{
    public $table = 'disenador';
    public $timestamps = false;
    public $guarded = ['id'];

    public function persona()
    {
        return $this->belongsTo('App\Persona');
    }
}
