<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipos extends Model
{
    public function empregos()
    {
        return $this->hasMany(Empregos::class);
    }
}