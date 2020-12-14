<?php

use Illuminate\Database\Seeder;

class PreciosSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
                //
                $datos = [
                    [
                        'Tipo'=>'sencilla',
                        'precio'=>'20000',
                    
                    ],
                    [
                        'Tipo'=>'doble',
                        'precio'=>'40000',
                    ],
                    [
                        'Tipo'=>'matrimon',
                        'precio'=>'30000',
                    ],
                    [
                        'Tipo'=>'Suite',
                        'precio'=>'50000',
                    ],
                    [
                        'Tipo'=>'triple',
                        'precio'=>'60000',
                    ]
                ];
                DB::table('precio')->insert($datos);
    }
}
