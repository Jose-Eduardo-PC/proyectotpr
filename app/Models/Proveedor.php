<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    // Relacion entre uno a muchos
    public function Producto(){

        return $this->hasMany('App\Models\Producto');
        
        }
    use HasFactory;
}
