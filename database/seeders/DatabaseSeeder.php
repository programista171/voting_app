<?php

namespace Database\Seeders;

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
\App\Models\Journalist::factory(20)->create();
\App\Models\Voter::factory(1000)->create();
\App\Models\Vote::factory(20000)->create();
    }
}
