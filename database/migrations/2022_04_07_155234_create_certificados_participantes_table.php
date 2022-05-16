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
        Schema::create('certificados_participantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('certificado_id');
            $table->unsignedBigInteger('participante_id');
            $table->foreign('certificado_id')->references('id')->on('certificados');
            $table->foreign('participante_id')->references('id')->on('participantes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificados_participantes');
    }
};
