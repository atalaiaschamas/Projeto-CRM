<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 120);
            $table->string('email', 120);
            $table->string('endereco', 120);
            $table->string('bairro', 50);
            $table->string('Cidade', 80);
            $table->string('estado', 50);
            $table->string('telefone_residencial', 15);
            $table->string('telefone_celular', 15);
            $table->string('telefone_comercial', 15);
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
        Schema::dropIfExists('clientes');
    }
}
