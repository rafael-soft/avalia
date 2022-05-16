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
        Schema::create('questoes', function (Blueprint $table) {
            $table->id();
            $table->mediumText('pergunta');
            $table->integer('tempo')->default(0);
            $table->integer('peso')->default(1);
            $table->timestamps();
        });

        Schema::table('alternativas', function (Blueprint $table) {
            $table->bigInteger('questao_id')->unsigned();
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
        Schema::table('alternativas', function (Blueprint $table) {
            $table->dropForeign('alternativas_questao_id_foreign');
            $table->dropColumn('questao_id');
        });
        Schema::dropIfExists('questoes');
    }
};
