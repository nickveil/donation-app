<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DonorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Donor::factory(10)->create();

    }
}
