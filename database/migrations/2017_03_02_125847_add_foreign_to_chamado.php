<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToChamado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('chamados', function(Blueprint $table) {
        $table->foreign('demanda_id')->references('id')->on('demandas');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('chamados', function(Blueprint $table) {
        $table->dropforeign('demanda_id');
      });
    }
}
