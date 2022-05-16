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
        Schema::create('cadastros_pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('imagem')->nullable();
            $table->timestamps();
            $table->index('nome');
        });

        Schema::table('participantes', function (Blueprint $table) {
            $table->bigInteger('cadastro_pessoa_id')->unsigned()->unique();
            $table->foreign('cadastro_pessoa_id')->references('id')->on('cadastros_pessoas');
        });

        Schema::table('usuarios', function (Blueprint $table) {
            $table->bigInteger('cadastro_pessoa_id')->unsigned()->unique();
            $table->foreign('cadastro_pessoa_id')->references('id')->on('cadastros_pessoas');
        });

        Schema::table('pessoas_fisicas', function (Blueprint $table) {
            $table->bigInteger('cadastro_pessoa_id')->unsigned()->unique();
            $table->foreign('cadastro_pessoa_id')->references('id')->on('cadastros_pessoas');
        });

        Schema::table('pessoas_juridicas', function (Blueprint $table) {
            $table->bigInteger('cadastro_pessoa_id')->unsigned()->unique();
            $table->foreign('cadastro_pessoa_id')->references('id')->on('cadastros_pessoas');
        });

        Schema::table('enderecos', function (Blueprint $table) {
            $table->bigInteger('cadastro_pessoa_id')->unsigned()->unique();
            $table->foreign('cadastro_pessoa_id')->references('id')->on('cadastros_pessoas');
        });

        Schema::table('contatos_voz', function (Blueprint $table) {
            $table->bigInteger('cadastro_pessoa_id')->unsigned()->unique();
            $table->foreign('cadastro_pessoa_id')->references('id')->on('cadastros_pessoas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('participantes', function (Blueprint $table) {
            $table->dropForeign('participantes_cadastro_pessoa_id_foreign');
            $table->dropColumn('cadastro_pessoa_id');
        });

        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropForeign('usuarios_cadastro_pessoa_id_foreign');
            $table->dropColumn('cadastro_pessoa_id');
        });

        Schema::table('pessoas_fisicas', function (Blueprint $table) {
            $table->dropForeign('pessoas_fisicas_cadastro_pessoa_id_foreign');
            $table->dropColumn('cadastro_pessoa_id');
        });

        Schema::table('pessoas_juridicas', function (Blueprint $table) {
            $table->dropForeign('pessoas_juridicas_cadastro_pessoa_id_foreign');
            $table->dropColumn('cadastro_pessoa_id');
        });

        Schema::table('enderecos', function (Blueprint $table) {
            $table->dropForeign('enderecos_cadastro_pessoa_id_foreign');
            $table->dropColumn('cadastro_pessoa_id');
        });

        Schema::table('contatos_voz', function (Blueprint $table) {
            $table->dropForeign('contatos_voz_cadastro_pessoa_id_foreign');
            $table->dropColumn('cadastro_pessoa_id');
        });

        Schema::dropIfExists('cadastros_pessoas');
    }
};
