<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->integer('id_escola');
            $table->foreign('id_escola')->references('id')->on('escolas');
            $table->string('modalidade');
            $table->integer('id_professor');
            $table->foreign('id_professor')->references('id')->on('professors');
            $table->text('descricao');
            $table->integer('id_disciplina');
            $table->foreign('id_disciplina')->references('id')->on('disciplina');
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
        Schema::dropIfExists('turmas');
    }
}
