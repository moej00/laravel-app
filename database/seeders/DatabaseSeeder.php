<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(4)->create();

        Listing::factory(4)->create();
        
        // Listing::create([
        //     'title'=> 'Laravel Senior Developer',
        //     'tags' => 'Laravel, javascript',
        //     'company'=> 'Acme Corp',
        //     'location'=> "California",
        //     'email'=>'email@email.com',
        //     'website'=>'http://wwww.website.com',
        //     'description'=> 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt autem assumenda, quidem commodi ea maxime quae, debitis iure non eaque, numquam quam dicta distinctio quibusdam quisquam reiciendis ratione nulla expedita?',
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
