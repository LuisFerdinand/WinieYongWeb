<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(PartSeeder::class);
        $this->call(JobSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProjectsTableSeeder::class,);
        $this->call(ProductsTableSeeder::class,);
        $this->call(CategorySeeder::class,);
        $this->call(BrandSeeder::class,);
        $this->call(TypeSeeder::class,);
    }
}
