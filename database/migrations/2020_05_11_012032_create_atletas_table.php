<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atletas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('sexo');
            $table->string('cpf')->nullable();
            $table->date('data_nascimento')->nulable();
            $table->decimal('peso');
            $table->integer('altura');
            $table->integer('circ_abdomen')->nulable();
            $table->integer('nivel_atividade')->nulable();
            $table->string('imagem')->nulable();
            $table->integer('id_empresa');
            
            $table->foreign('id_empresa')->references('id')->on('empresas'); 
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
        Schema::dropIfExists('atletas');
    }
}
