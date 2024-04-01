<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuidador_Especie extends Model
{
    use HasFactory;
    public function cuidadors (){
        return $this->belongsTo(Cuidador::class, 'id_cuidador');
    }
    public function especies (){
        return $this->belongsTo(Especie::class, 'id_especie');
    }
}
