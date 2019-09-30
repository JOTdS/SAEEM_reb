<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradeHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grade__horarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            // $table->unsignedBigInteger('id_disciplina');
            // $table->foreign('id_disciplina')->references('id')->on('disciplinas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grade__horarios');
    }
}
