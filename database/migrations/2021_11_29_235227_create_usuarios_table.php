<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            
            
            $table->string("nombre");
            $table->string("apellido");
            $table->integer("celular");
            $table->string("direccion");
             $table->date("fecha_reg");
            $table->string("estado");
            $table->string("usuario");
            $table->string("contraseña");



    /**
     * aqui abajo sacamos la tabla de donde hacemos refenrecias la llave foranea
    
     

     */

            $table->unsignedBigInteger('rol_id');
            $table->foreign('rol_id')->references('id')->on('rols');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
