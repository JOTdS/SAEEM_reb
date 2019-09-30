<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisciplinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplinas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nome');
            $table->string('descricao');
            $table->Integer('id_turma');
            //   $table->foreign('id_turma')->references('id')->on('turmas');
            //
            $table->Integer('id_aluno')->nullable();
            //   $table->foreign('id_aluno')->references('id')->on('alunos');

            $table->Integer('id_professor')->nullable();
            //   $table->foreign('id_professor')->references('id')->on('professors');

            });
      }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disciplinas');
    }
}
