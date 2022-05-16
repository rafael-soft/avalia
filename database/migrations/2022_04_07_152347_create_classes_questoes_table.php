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
        Schema::create('classes_questoes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('descricao')->nullable();
            $table->timestamps();
        });

        Schema::table('questoes', function (Blueprint $table) {
            $table->bigInteger('classe_questao_id')->unsigned();
            $table->foreign('classe_questao_id')->references('id')->on('classes_questoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('questoes', function (Blueprint $table) {
            $table->dropForeign('questoes_classe_questao_id_foreign');
            $table->dropColumn('classe_questao_id');
        });

        Schema::dropIfExists('classes_questoes');
    }
};
