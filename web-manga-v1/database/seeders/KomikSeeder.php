<?php

namespace Database\Seeders;

use App\Models\komik;
use Illuminate\Database\Seeder;

class KomikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        komik::factory(100)->create();
    }
}
