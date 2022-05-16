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
        Schema::create('avaliacoes_questoes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('avaliacao_id');
            $table->unsignedBigInteger('questao_id');
            $table->timestamps();
            $table->foreign('avaliacao_id')->references('id')->on('avaliacoes');
            $table->foreign('questao_id')->references('id')->on('questoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avaliacoes_questoes');
    }
};
