<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realizacoes_questoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('realizacao_avaliacao_id');
            $table->unsignedBigInteger('questao_id');
            $table->unsignedBigInteger('alternativa_id')->nullable();
            $table->longText('resposta_discursiva')->nullable();
            $table->integer('status_resposta')->default(0);
            $table->foreign('realizacao_avaliacao_id')->references('id')->on('realizacoes_avaliacoes');
            $table->foreign('questao_id')->references('id')->on('questoes');
            $table->foreign('alternativa_id')->references('id')->on('alternativas');
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
        Schema::dropIfExists('realizacoes_questoes');
    }
};
