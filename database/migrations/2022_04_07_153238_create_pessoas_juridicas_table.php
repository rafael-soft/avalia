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
        Schema::create('pessoas_juridicas', function (Blueprint $table) {
            $table->id();
            $table->string('nome_comercial', 100);
            $table->string('cnpj', 14);
            $table->string('ramo_atividade', 100);
            $table->timestamps();
            $table->index('cnpj');
            $table->index('nome_comercial');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas_juridicas');
    }
};
