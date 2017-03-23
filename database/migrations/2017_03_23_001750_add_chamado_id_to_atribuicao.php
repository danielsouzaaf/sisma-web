<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddChamadoIdToAtribuicao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atribuicaos', function(Blueprint $table){
            $table->foreign('chamado_id')->references('id')->on('chamados');
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
            $table->dropForeign('chamado_id');
        });
    }
}
