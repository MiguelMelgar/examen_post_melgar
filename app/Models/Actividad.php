<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    use HasFactory;
    public function animal_actividads (){
        return $this->hasMany(Animal_Actividad::class, 'id');
    }
}