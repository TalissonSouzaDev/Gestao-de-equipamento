<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCpusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cpus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('equipamento');
            $table->string('nome')->unique();
            $table->string('tombo')->unique();
            $table->string('n_s')->unique();
            $table->string('marca');
            $table->string('modelo');
            $table->string('tipo')->nullable();
            $table->string('patrimonio');
            $table->string('unidade_setor');
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
        Schema::dropIfExists('cpus');
    }
}
