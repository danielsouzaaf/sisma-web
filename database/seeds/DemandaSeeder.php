<?php

use Illuminate\Database\Seeder;

class DemandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('demandas')->insert([['descricao' => 'Torneira'], ['descricao' => 'Luz']]);
    }
}
