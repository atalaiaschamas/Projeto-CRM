<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class CadastroClienteController extends Controller
{
    public function home()
    {   
        return view('/cadastro/home');
    }

    public function cadastro(Request $request)
    {
        $post = $request->all();

        $clientes = Clientes::create($post);

        if ($clientes) {
            return redirect('consultaclientes/consulta');
        }
    }
}
