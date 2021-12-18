<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    public function Profesor(){

        return $this->hasMany('App\Models\Profesor');
        
        }
    use HasFactory;
}
