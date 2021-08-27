<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Merchants;
use \App\Models\Products;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        Merchants::factory(1500)
        ->has(Products::factory()->count(10))
        ->create()->first();
    }
}
