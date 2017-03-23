<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtribuicaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atribuicaos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('prazo_previsto')->unsigned();
            $table->date('data_resolucao');
            $table->integer('chamado_id')->unsigned();
            $table->integer('tecnico_id')->unsigned();
            $table->boolean('ativa');
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
        Schema::dropIfExists('atribuicaos');
    }
}
