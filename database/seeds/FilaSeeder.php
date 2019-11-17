<?php

use Illuminate\Database\Seeder;

class FilaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Fila', 20)->create();
    }
}
