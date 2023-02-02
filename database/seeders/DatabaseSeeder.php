<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Database\Factories\ListingFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Listing::factory(10)->create();
        Listing::create([
            'title' => 'Laravel senior developer',
            'tags' => 'Laravel, javascript',
            'company' => 'Nyariki and sons',
            'location' => 'Kenol, Kenya',
            'email' => 'nyarikikaruma@gmail.com',
            'website' => 'https://www.karuma.com',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Debitis, adipisci impedit? Odio sint natus recusandae mollitia 
            officiis, nemo quis molestias sunt deserunt aspernatur 
            ipsa iure eligendi omnis saepe dolore! A'
        ]);
        Listing::create([
            'title' => 'vue js senior developer',
            'tags' => 'Vue js, javascript',
            'company' => 'Karuma and sons',
            'location' => 'Thika, Kenya',
            'email' => 'mwaura@gmail.com',
            'website' => 'https://www.karuma.com',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Debitis, adipisci impedit? Odio sint natus recusandae mollitia 
            officiis, nemo quis molestias sunt deserunt aspernatur 
            ipsa iure eligendi omnis saepe dolore! A'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
