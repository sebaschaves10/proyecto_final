<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
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
                'nombrecategoria'=>'Abarrotes.',
                'descripcion'=>'Conjunto de artículos comerciales, especialmente comidas, bebidas y conservas.',
                'estado'=>'1'
            ],
            [
                'nombrecategoria'=>'Articulos de limpieza.',
                'descripcion'=>'Productos químicos usados para la limpieza.',
                'estado'=>'1'
            ],
            [
                'nombrecategoria'=>'Mecato',
                'descripcion'=>'Dulce o golosina que se come entre comidas.',
                'estado'=>'1'
            ],
            [
                'nombrecategoria'=>'Gaseosas',
                'descripcion'=>'Bebida refrescante y efervescente elaborada con agua, ácido carbónico y azúcar.',
                'estado'=>'1'
            ],
            [
                'nombrecategoria'=>'Embutidos',
                'descripcion'=>' Pieza de carne picada y condimentada con hierbas aromáticas y diferentes especias.',
                'estado'=>'1'
            ]
        ];
        DB::table('categorias')->insert($datos);
    }
}
