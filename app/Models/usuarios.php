<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    public function imagenes(){
        return $this->morphMany('App/Imagen','modelo');
    }
    use HasFactory;
}
