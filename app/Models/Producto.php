<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function Detalle(){

        return $this->hasMany('App\Models\Detalle');
        
        }

    public function Proveedor(){

        return $this->belongsTo('App\Models\Proveedor');
        }


        public function Categoria(){

            return $this->belongsTo('App\Models\Categoria');
            }

    use HasFactory;
}
