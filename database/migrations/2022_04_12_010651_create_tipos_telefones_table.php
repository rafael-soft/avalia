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
        Schema::create('tipos_telefones', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->primary('id');
            $table->string('nome', 30);
            $table->string('descricao', 100)->nullable();
            $table->timestamps();
        });

        Schema::table('contatos_voz', function (Blueprint $table) {
            $table->integer('tipo_telefone_id')->unsigned()->unique();
            $table->foreign('tipo_telefone_id')->references('id')->on('tipos_telefones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contatos_voz', function (Blueprint $table) {
            $table->dropForeign('contatos_voz_tipo_telefone_id_foreign');
            $table->dropColumn('tipo_telefone_id');
        });

        Schema::dropIfExists('tipos_telefones');
    }
};
