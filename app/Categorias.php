<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    public function empregos()
    {
        return $this->hasMany(Empregos::class);
    }
}