<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stands extends Model
{
    public function imagenes(){
        return $this->morphMany(imagenes::class,'modelo');
    }
    use HasFactory;
}
