<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'nombreCliente'=>'Luis Suarez',
                'cedula'=>'1085941705',
                'genero'=>'M',
                'direccion'=>'Calle 14 # 2 A',
                'telefono'=>'315762054',
                'estado'=>'1'
            
            ],
            [
                'nombreCliente'=>'Mario Delgado',
                'cedula'=>'1085941802',
                'genero'=>'M',
                'direccion'=>'Calle 17 # 1 A',
                'telefono'=>'315636606',
                'estado'=>'1'
            ],
            [
                'nombreCliente'=>'Luisa Navas',
                'DNI'=>'1085941844',
                'genero'=>'F',
                'direccion'=>'Calle 12 # 5 B',
                'telefono'=>'30010233',
                'estado'=>'1'
            ],
            [
                'nombreCliente'=>'Roberto Toro',
                'cedula'=>'1085942655',
                'genero'=>'M',
                'direccion'=>'Calle 12 # 14 C',
                'telefono'=>'31240567',
                'estado'=>'1'
            ],
            [
                'nombreCliente'=>'Eliana Martinez',
                'cedula'=>'1085970401',
                'genero'=>'F',
                'direccion'=>'Calle 11 # 2 D',
                'telefono'=>'315770606',
                'estado'=>'1'
            ]
        ];
        DB::table('clientes')->insert($datos);
    }
}

