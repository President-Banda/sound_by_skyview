<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(5)->create();

         Listing::create([
             'title' => 'Laravel Senior Developer',
             'tags' => 'laravel, javascript',
             'company_name' => 'Chiweto',
             'location' => 'Lilongwe',
             'email' => 'albert@chiweto.ch',
             'website' => 'www.chiweto.ch',
             'description' => 'Failed! Error: SET PASSWORD has no significance for user 
             \'root\'@\'localhost\' as the authentication method used doesn\'t store 
             authentication data in the MySQL server. Please consider using ALTER USER 
             instead if you want to change authentication parameters.'
         ]);
    }
}
