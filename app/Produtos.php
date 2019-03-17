<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    public $fillable = ['codigo_produto', 'descricao', 'marca_produto', 'fornecedor', 'tipo_produto',
                        'garantia', 'preco_fabricante', 'preco_minimo', 'preco_maximo', 'origem_produto',
                        'loja_fisica', 'comentario'];
}
