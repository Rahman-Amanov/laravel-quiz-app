<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use GrahamCampbell\ResultType\Result;

class ResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Result::factory(20)->create();

    }
}
