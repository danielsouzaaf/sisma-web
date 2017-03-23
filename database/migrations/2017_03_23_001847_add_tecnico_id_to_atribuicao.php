<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTecnicoIdToAtribuicao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atribuicaos', function(Blueprint $table){
            $table->foreign('tecnico_id')->references('id')->on('tecnicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('atribuicaos', function(Blueprint $table) {
            $table->dropForeign('tecnico_id');
        });
    }
}
