<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Part;

class PartSeeder extends Seeder
{
    public function run()
    {
        Part::factory()->count(50)->create();
    }
}
