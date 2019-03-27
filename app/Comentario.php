<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public $table = 'comentarios';
    public $guarded = [
        'id'
    ];
    public $timestamps = false;
}
