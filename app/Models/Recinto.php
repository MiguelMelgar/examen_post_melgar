<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recinto extends Model
{
    use HasFactory;
    public function especies (){
        return $this->belongsTo(Especie::class, 'id_especie');
    }
    public function animal_recintos (){
        return $this->hasMany(Animal_Recinto::class, 'id');
    }
}
