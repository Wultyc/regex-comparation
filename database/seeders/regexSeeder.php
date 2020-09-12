<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\regex;

class regexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        regex::factory()->times(10)->create();
    }
}
