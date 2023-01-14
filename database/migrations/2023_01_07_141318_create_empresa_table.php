<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Date;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj', 64); // CNPJ como primaria
            $table->string('razaosocial', 220);
            $table->string('nome', 220);
            $table->dateTime('dataAbertura');
            $table->string('porte', 220);
            $table->string('naturezaJuridica', 220);
            $table->string('opMei', 20);
            $table->string('situacao', 20);
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
        Schema::dropIfExists('empresas');
    }
};
