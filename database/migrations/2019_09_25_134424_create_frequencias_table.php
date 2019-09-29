<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrequenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frequencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_disciplina');
            $table->foreign('id_disciplina')->references('id')->on('disciplinas');
            $table->integer('id_aluno');
            $table->foreign('id_aluno')->references('id')->on('alunos');
            $table->date('data');
            $table->string('status');         
            $table->text('descricao');
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
        Schema::dropIfExists('frequencias');
    }
}
