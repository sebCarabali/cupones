<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $table = 'categoria';
    public $guarded = ['id'];
    public $timestamps = false;
}
