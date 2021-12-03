<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function Venta(){

        return $this->hasMany('App\Models\Venta');
        
        }

        


    use HasFactory;
}
