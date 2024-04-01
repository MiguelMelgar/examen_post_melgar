<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    public function especies (){
        return $this->belongsTo(Especie::class, 'id_especie');
    }

    public function cuidadors (){
        return $this->belongsTo(Cuidador::class, 'id_cuidador');
    }

    public function animal_actividads (){
        return $this->hasMany(Animal_Actividad::class, 'id');
    }
    public function animal_recintos (){
        return $this->hasMany(Animal_Recinto::class, 'id');
    }
}
