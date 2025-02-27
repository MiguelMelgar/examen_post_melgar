<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal_Actividad extends Model
{
    use HasFactory;
    public function animals (){
        return $this->belongsTo(Animal::class, 'id_animal');
    }
    public function actividads (){
        return $this->belongsTo(Actividad::class, 'id_actividad');
    }
}
