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
            $table->string('NOME');
            $table->string('IDADE');
            $table->date('nascimento');
            $table->string('SERIE')->nullable()->default(NULL);
            $table->string('CPF');
            $table->string('MAE');
            $table->string('PAI')->nullable()->default(NULL);
            $table->string('RUA');
            $table->integer('NUMERO');
            $table->string('BAIRRO');
            $table->string('COMPLEMENTO')->nullable()->default(NULL);
            $table->string('CIDADE');
            $table->string('RELIGIAO');
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
