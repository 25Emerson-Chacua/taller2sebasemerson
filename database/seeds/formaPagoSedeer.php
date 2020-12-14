<?php

use Illuminate\Database\Seeder;

class formaPagoSedeer extends Seeder
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
                'descripcion'=>'Efectivo',
            ],
            [
                'descripcion'=>'credito',
            ],
            [
                'descripcion'=>'debito',
            ],
            [
                'descripcion'=>'consignacion',
            ],
            [
                'descripcion'=>'paypal',
            ]
        ];
        DB::table('formaPago')->insert($datos);
    }
}
