<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100);
            $table->string('cpf', 11)->unique();
            $table->string('telefone')->nullable();
            $table->text('endereco')->nullable();
            $table->text('descricao')->nullable();
            $table->char('sexo', 1);
            $table->string('password');
            $table->boolean('is_administrador')->default(false);
            $table->boolean('is_professor')->default(false);
            $table->boolean('is_aluno')->default(false);
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
        Schema::dropIfExists('pessoas');
    }
}
