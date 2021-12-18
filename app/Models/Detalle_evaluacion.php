<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_evaluacion extends Model
{



    public function Tema(){

        return $this->belongsTo('App\Models\Tema');
        }


        public function Estudiante(){

            return $this->belongsTo('App\Models\Estudiante');
            }
        



















    use HasFactory;
}
