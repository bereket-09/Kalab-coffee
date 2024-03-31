<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PhoneNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\PhoneNumber::factory(10)->create();
    }
}
