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
                'nombre'=>'robin',
                'apellido'=>'gonzalescaucota',
                'email'=>'gonzalescaucota@gmail.com',
                'celular'=>76814820,
                'Direccion'=>'calle comercio',
                'estado' =>'1'
            ]
            ]);
            

    }
}
