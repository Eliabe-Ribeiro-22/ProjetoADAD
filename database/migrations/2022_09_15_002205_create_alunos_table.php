<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('idade');
            $table->date('nascimento');
            $table->string('serie')->nullable()->default(NULL);
            $table->string('cpf');
            $table->string('mae');
            $table->string('pai')->nullable()->default(NULL);
            $table->string('rua');
            $table->integer('numero');
            $table->string('bairro');
            $table->string('complemento')->nullable()->default(NULL);
            $table->string('cidade');
            $table->string('religiao');
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
        Schema::dropIfExists('alunos');
    }
};
