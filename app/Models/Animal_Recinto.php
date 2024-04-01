<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal_Recinto extends Model
{
    use HasFactory;
    public function animals (){
        return $this->belongsTo(Animal::class, 'id_animal');
    }
    public function recintos (){
        return $this->belongsTo(Recinto::class, 'id_recinto');
    }
}
