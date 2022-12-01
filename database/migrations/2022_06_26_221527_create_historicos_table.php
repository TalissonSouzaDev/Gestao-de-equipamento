<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('equipamento')->nullable();
            $table->string('nome')->nullable();
            $table->string('ip')->nullable();
            $table->string('tipo')->nullable();
            $table->string('tombo')->nullable();
            $table->string('n_s')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('patrimonio')->nullable();
            $table->string('unidade_setor')->nullable();
            // para usuarios
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('ramal')->nullable();

            $table->timestamps();

            // relacionamento com a tabela de users

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historicos');
    }
}
