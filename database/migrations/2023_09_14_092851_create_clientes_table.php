<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('tipo')->default(0);
            $table->string('doc')->nullable();
            $table->string('razao')->nullable();
            $table->string('fantasia')->nullable();
            $table->string('end_cep')->nullable();
            $table->string('end_logra')->nullable();
            $table->string('end_comp')->nullable();
            $table->string('end_num')->nullable();
            $table->string('end_bairro')->nullable();
            $table->string('end_cidade')->nullable();
            $table->string('end_uf')->nullable();
            $table->string('tel')->nullable();
            $table->string('cel')->nullable();
            $table->string('contato')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
