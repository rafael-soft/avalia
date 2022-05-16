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
        Schema::create('realizacoes_avaliacoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('avaliacao_id');
            $table->unsignedBigInteger('participante_id');
            $table->foreign('avaliacao_id')->references('id')->on('avaliacoes');
            $table->foreign('participante_id')->references('id')->on('participantes');
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
        Schema::dropIfExists('realizacoes_avaliacoes');
    }
};
