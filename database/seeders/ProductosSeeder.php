<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
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
                'nombreProducto'=>'Pepsi 1.5 lts',
                'cantidad'=>'80',
                'precio'=>'2900',
                'foto'=>'pepsi1.5.jpg',
                'estado'=>'1',
                'categoria'=>'4'
            
            ],
            [
                'nombreProducto'=>'Arroz Diana 1Kg',
                'cantidad'=>'200',
                'precio'=>'3800',
                'foto'=>'arrozdiana.jpg',
                'estado'=>'1',
                'categoria'=>'1'
            ],
            [
                'nombreProducto'=>'Limpido 500ml',
                'cantidad'=>'150',
                'precio'=>'2900',
                'foto'=>'limpido.jpg',
                'estado'=>'1',
                'categoria'=>'4'
            ],
            [
                'nombreProducto'=>'Salchichca Ranchera',
                'cantidad'=>'50',
                'precio'=>'5000',
                'foto'=>'salchicharanchera.jpg',
                'estado'=>'1',
                'categoria'=>'5'
            ],
            [
                'nombreProducto'=>'Doritos grande',
                'cantidad'=>'35',
                'precio'=>'3700',
                'foto'=>'doritos.jpg',
                'estado'=>'1',
                'categoria'=>'3'
            ]
        ];
        DB::table('productos')->insert($datos);
    }
}
