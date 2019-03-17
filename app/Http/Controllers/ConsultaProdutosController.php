<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;

class ConsultaProdutosController extends Controller
{
    public function consulta()
    {   
        $produtos = Produtos::all();
        return view('/consultaprodutos/consulta', [
            'produtos' => $produtos
        ]);
    }
}
