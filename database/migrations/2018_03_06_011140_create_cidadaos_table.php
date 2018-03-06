<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidadaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('apelido');
            $table->bigInteger('tel_presencial');
            $table->bigInteger('celular');
            $table->bigInteger('tel_fixo');
            $table->string('email1');
            $table->string('email2');
            $table->date('data_nascimento');
            $table->bigInteger('endereco_id');
            $table->enum('sexo', ['M', 'F']);
            $table->enum('estado_civil', ['solteiro', 'casado', 'separado', 'divorciado', 'viuvo']);

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
        Schema::dropIfExists('cidadaos');
    }
}
