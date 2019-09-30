<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyDisciplinaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('disciplinas', function (Blueprint $table) {
            $table->foreign('id_turma')->references('id')->on('turmas');
            $table->foreign('id_aluno')->references('id')->on('alunos');
            $table->foreign('id_professor')->references('id')->on('professors');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('disciplinas', function (Blueprint $table) {
            //
        });
    }
}
