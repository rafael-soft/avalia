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
        Schema::create('tipos_pessoas', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->primary('id');
            $table->string('nome', 50);
            $table->string('descricao')->nullable();
            $table->timestamps();
        });

        Schema::table('cadastros_pessoas', function (Blueprint $table) {
            $table->integer('tipo_pessoa_id')->unsigned();
            $table->foreign('tipo_pessoa_id')->references('id')->on('tipos_pessoas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cadastros_pessoas', function (Blueprint $table) {
            $table->dropForeign('cadastros_pessoas_tipo_pessoa_id_foreign');
            $table->dropColumn('tipo_pessoa_id');
        });
        Schema::dropIfExists('tipos_pessoas');
    }
};
