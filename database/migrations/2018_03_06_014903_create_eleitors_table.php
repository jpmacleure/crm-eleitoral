<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEleitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleitors', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('cidadao_id');
            $table->integer('intencao_voto');
            $table->string('observacao');
            $table->boolean('whatsapp');
            $table->string('facebook');
            $table->string('twitter');
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
        Schema::dropIfExists('eleitors');
    }
}
