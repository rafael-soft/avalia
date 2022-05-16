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
        Schema::create('generos_pessoas', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->primary('id');
            $table->string('genero');
            $table->timestamps();
        });

        Schema::table('pessoas_fisicas', function (Blueprint $table) {
            $table->integer('genero_pessoa_id')->unsigned()->unique();
            $table->foreign('genero_pessoa_id')->references('id')->on('generos_pessoas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pessoas_fisicas', function (Blueprint $table) {
            $table->dropForeign('pessoas_fisicas_genero_pessoa_id_foreign');
            $table->dropColumn('genero_pessoa_id');
        });

        Schema::dropIfExists('generos_pessoas');
    }
};
