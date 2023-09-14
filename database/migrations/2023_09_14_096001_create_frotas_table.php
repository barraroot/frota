<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frotas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('marca_id');
            $table->foreignId('modelo_id');
            $table->string('placa');
            $table->string('renavam')->nullable();
            $table->string('ano_fab', 4)->nullable();
            $table->string('ano_modelo', 4)->nullable();
            $table->string('km_atual')->nullable();
            $table->string('km_troca_oleo')->nullable();
            $table->string('km_revisao')->nullable();
            $table->string('km_rodizio_pneu')->nullable();
            $table->string('km_filtro_oleo')->nullable();
            $table->string('rastreador')->nullable();
            $table->date('ultimo_licenciamento')->nullable();
            $table->date('inicio_seguro')->nullable();
            $table->date('fim_seguro')->nullable();
            $table->string('apolice')->nullable();
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
        Schema::dropIfExists('frotas');
    }
}
