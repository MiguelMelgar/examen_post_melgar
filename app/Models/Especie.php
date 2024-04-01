<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    use HasFactory;
    public function animals (){
        return $this->hasMany(Animal::class, 'id');
    }
    public function recintos (){
        return $this->hasMany(Recinto::class, 'id');
    }
    public function cuidador_especies (){
        return $this->hasMany(Cuidador_Especie::class, 'id');
    }
}
