<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actividade extends Model
{









    public function Materia(){

        return $this->belongsTo('App\Models\Materia');
        }








    use HasFactory;
}
