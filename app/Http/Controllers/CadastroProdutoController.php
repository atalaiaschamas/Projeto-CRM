<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;

class CadastroProdutoController extends Controller
{
    public function home()
    {   
        return view('/produto/home');
    }

    public function cadastro(Request $request)
    {
        $post = $request->all();

        $produtos = Produtos::create($post);

        if ($produtos) {
            return redirect('consultaprodutos/consulta');
        }
    }
}
