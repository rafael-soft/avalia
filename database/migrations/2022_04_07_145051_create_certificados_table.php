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
        Schema::create('certificados', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('descricao')->nullable();
            $table->string('logo')->nullable();
            $table->mediumText('header');
            $table->mediumText('body');
            $table->mediumText('footer');
            $table->mediumText('border');
            $table->timestamps();
        });

        Schema::table('avaliacoes', function (Blueprint $table) {
            $table->bigInteger('certificado_id')->unsigned()->nullable();
            $table->foreign('certificado_id')->references('id')->on('certificados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('avaliacoes', function (Blueprint $table) {
            $table->dropForeign('avaliacoes_certificado_id_foreign');
            $table->dropColumn('certificado_id');
        });
        Schema::dropIfExists('certificados');
    }
};
