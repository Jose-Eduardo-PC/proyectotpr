<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{


    public function Usuario(){

        return $this->belongsTo('App\Models\Usuario');
        }


        public function Cliente(){

            return $this->belongsTo('App\Models\Cliente');
            }







    use HasFactory;
}
