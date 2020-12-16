<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    //
    public function showConsultas(){

        $clientes = DB::table('cliente')->orderBy('nombres')->get();

        return view('clientes.clientes', ['clientes' => $clientes]);   
        
    }
}
