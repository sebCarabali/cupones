<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aliado extends Model
{
    public $table = "aliado";
    public $timestamps = false;

    protected $guarded = ['id'];
}
