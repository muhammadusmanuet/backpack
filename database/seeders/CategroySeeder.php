<?php

namespace Database\Seeders;

use App\Categroy;
use Illuminate\Database\Seeder;

class CategroySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categroy::factory()->count(5)->create();
    }
}
