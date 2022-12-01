<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoteadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roteadors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('equipamento');
            $table->string('ip');
            $table->string('tombo')->unique();
            $table->string('n_s')->unique();
            $table->string('marca');
            $table->string('modelo');
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
        Schema::dropIfExists('roteadors');
    }
}
