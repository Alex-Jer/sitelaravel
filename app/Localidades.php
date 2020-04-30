<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidades extends Model
{
    public function empregos()
    {
        return $this->hasMany(Empregos::class);
    }
}