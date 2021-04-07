<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Prueba;
class PruebaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Prueba::factory(20)->create();

    }
}
