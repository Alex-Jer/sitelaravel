<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empregos extends Model
{
    public function empresas()
    {
        return $this->belongsTo(Empresas::class);
    }

    public function localidades()
    {
        return $this->belongsTo(Localidades::class);
    }

    public function categorias()
    {
        return $this->belongsTo(Categorias::class);
    }

    public function tipos()
    {
        return $this->belongsTo(Tipos::class);
    }
}