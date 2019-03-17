<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class ConsultaClientesController extends Controller
{
    public function consulta()
    {   
        $clientes = Clientes::all();
        return view('/consultaclientes/consulta', [
            'clientes' => $clientes
        ]);
    }
}
