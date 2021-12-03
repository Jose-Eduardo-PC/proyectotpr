<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    public function Detalle(){

        return $this->hasMany('App\Models\Detalle');
        
        }

    public function Cliente(){

        return $this->belongsTo('App\Models\Cliente');
        }


        public function Usuario(){

            return $this->belongsTo('App\Models\Usuario');
            }





    use HasFactory;
}
