<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyFrequenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('frequencias', function (Blueprint $table) {
            $table->foreign('id_disciplina')->references('id')->on('disciplinas');
            $table->foreign('id_aluno')->references('id')->on('alunos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('frequencias', function (Blueprint $table) {
            //
        });
    }
}
