<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escolas', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->text('nome');
          $table->text('descricao');
          $table->text('endereco');
          $table->integer('id_gestor');
          $table->text('telefone');
          $table->text('modalidade');
          $table->integer('inep');
          $table->integer('id_professor');
          $table->integer('id_funcionario');
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
        Schema::dropIfExists('escolas');
    }
}
