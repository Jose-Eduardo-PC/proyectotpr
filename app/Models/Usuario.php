<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    public function Rol(){

        return $this->belongsTo('App\Models\Rol');
        }
        
        public function Usuario(){

            return $this->hasMany('App\Models\Usuario');
            
            }
      





    use HasFactory;
}
