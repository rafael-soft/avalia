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
        Schema::create('brasil_ufs', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->primary('id');
            $table->string('nome', 50);
            $table->string('sigla', 2);
            $table->timestamps();
        });

        Schema::table('enderecos', function (Blueprint $table) {
            $table->integer('brasil_uf_id')->unsigned()->unique();
            $table->foreign('brasil_uf_id')->references('id')->on('brasil_ufs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enderecos', function (Blueprint $table) {
            $table->dropForeign('enderecos_brasil_uf_id_foreign');
            $table->dropColumn('brasil_uf_id');
        });

        Schema::dropIfExists('brasil_ufs');
    }
};
