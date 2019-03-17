<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo_produto', 10);
            $table->string('descricao', 120);
            $table->string('marca_produto', 120);
            $table->string('fornecedor', 50);
            $table->string('tipo_produto', 80);
            $table->string('garantia', 50);
            $table->string('preco_fabricante', 15);
            $table->string('preco_minimo', 15);
            $table->string('preco_maximo', 15);
            $table->string('origem_produto', 100);
            $table->string('loja_fisica', 100);
            $table->string('comentario', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
