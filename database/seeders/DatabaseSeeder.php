<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class)
            ->call(CountrySeeder::class)
            ->call(UserSeeder::class)
            ->call(JobSeeder::class)
            ->call(QuestionSeeder::class)
            ->call(CommentSeeder::class);
    }
}
