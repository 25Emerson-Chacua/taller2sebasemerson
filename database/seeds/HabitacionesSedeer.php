<?php

use Illuminate\Database\Seeder;

class HabitacionesSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $datos = [
            [
                'descripcion'=>'Es una Habitacion asignada a una persona.',
                'numCamas'=>'1',
                'foto'=>'',
                'precio_id'=>'1',
            
            ],
            [
                'descripcion'=>'Es una Habitacion asignada a dos personas',
                'numCamas'=>'2',
                'foto'=>'',
                'precio_id'=>'2',
            ],
            [
                'descripcion'=>'Es una habitacion para una pareja de enamorados',
                'numCamas'=>'1',
                'foto'=>'',
                'precio_id'=>'3',
            ],
            [
                'descripcion'=>'Es un salon o sala de estar, conectado a una o más habitaciones',
                'numCamas'=>'4',
                'foto'=>'',
                'precio_id'=>'4',
            ],
            [
                'descripcion'=>'una habitacion con capacidad para tres personas',
                'numCamas'=>'3',
                'foto'=>'',
                'precio_id'=>'5',
            ]
        ];
        DB::table('precio')->insert($datos);
    }
}
