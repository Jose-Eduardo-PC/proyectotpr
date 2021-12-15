<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    // Relacion entre uno a muchos

   protected $fillable =[
   'nombre',
   'apellido',
   'email',
   'celular',
   'Direccion',
   'estado'




    
   ];

 
   protected $hidden =[

    'created_at',
    'updated_at'


   ];













    public function Producto(){

        return $this->hasMany('App\Models\Producto');
        
        }
    
}
