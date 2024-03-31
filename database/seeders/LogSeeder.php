<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Log::factory(10)->create();
    }
}
