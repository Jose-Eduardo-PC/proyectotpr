<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class proveedorseeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedors')->insert([
            [
                'nombre'=>'aldahir',
                'apellido'=>'cisneros',
                'email'=>'arcacisnero@gmail.com',
                'celular'=>61668120,
                'Direccion'=>'avenida san martin ',
                'estado' =>'1'
            ]
            ]);
            

    }
}
