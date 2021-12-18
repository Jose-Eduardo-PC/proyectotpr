<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{



    public function Tema(){

        return $this->hasMany('App\Models\Tema');
        
        }




    use HasFactory;
}
