<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public function Materia(){

        return $this->hasMany('App\Models\Materia');
        
        }
    use HasFactory;
}
