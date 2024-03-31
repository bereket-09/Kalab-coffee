<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\Contact::factory(10)->create();
        
        \App\Models\Event::factory(10)->create();
        \App\Models\Flavor::factory(10)->create();
        \App\Models\Menu::factory(10)->create();
        \App\Models\Registration::factory(10)->create();
        
        \App\Models\Testimonial::factory(10)->create();
        
        // \App\Models\Event::factory(10)->create();


    }
}
