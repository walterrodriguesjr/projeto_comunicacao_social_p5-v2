<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateCreateModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /* CRIADA AUTOMATICAMENTE A FUNÇÃO PARA CRIAÇÃO DE TABELA */
    public function up()
    {
        /* CRIAÇÃO DE TABELA EM BANCO, POR DEFAULT, CRIA O ID E O TIMESTAMP */
        Schema::create('create_models', function (Blueprint $table) {
            /*CRIA COLUNA QUE REGISTRA CHAVE ÚNICA */
            $table->id();
            /* CRIA COLUNA QUE REGISTRA A DATA DE CRIAÇÃO E DE ATUALIZAÇÃO DO REGISTRO */
            $table->timestamps();
             /* CRIA COLUNA QUE REGISTRA O TÍTULO DO EVENTO */
            $table->string("title");
            /* CRIA COLUNA QUE REGISTRA A DESCRIÇÃO DO EVENTO */
            $table->text("description");
            /* CRIA COLUNA QUE REGISTRA A CIDADE DO EVENTO */
            $table->string("city");
            /* CRIA COLUNA QUE REGISTRA O QUE TERÁ NO EVENTO */
            $table->boolean("private");
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    /* FUNÇÃO CRIADA AUTOMATICAMENTE PARA REVERTER A CRIAÇÃO DE TABELA */
    public function down()
    {
        Schema::dropIfExists('create_models');
    }
}
