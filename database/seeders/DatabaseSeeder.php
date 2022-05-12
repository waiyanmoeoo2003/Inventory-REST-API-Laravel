<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Item;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //Seeding Category fake data
        Category::factory()->count(10)->create();
        //Seeding Item fake data
        Item::factory()->count(20)->create();
    }
}
