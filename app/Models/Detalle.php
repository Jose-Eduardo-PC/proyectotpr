<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{


    public function Venta(){

        return $this->belongsTo('App\Models\Venta');
        }


        public function Producto(){

            return $this->belongsTo('App\Models\Producto');
            }






    use HasFactory;
}
