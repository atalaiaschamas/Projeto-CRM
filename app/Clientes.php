<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    public $fillable = [
        'nome', 'email', 'endereco', 
        'bairro','Cidade', 'estado', 
        'telefone_residencial',
        'telefone_celular', 'telefone_comercial'
    ]; //nome das colunas
}
