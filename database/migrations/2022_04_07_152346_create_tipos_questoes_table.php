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
        Schema::create('tipos_questoes', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->primary('id');
            $table->string('nome', 50);
            $table->string('descricao')->nullable();
            $table->timestamps();
        });

        Schema::table('questoes', function (Blueprint $table) {
            $table->integer('tipo_questao_id')->unsigned();
            $table->foreign('tipo_questao_id')->references('id')->on('tipos_questoes');
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
            $table->dropForeign('questoes_tipo_questao_id_foreign');
            $table->dropColumn('tipo_questao_id');
        });

        Schema::dropIfExists('tipos_questoes');
    }
};
