<?php

namespace Database\Seeders;

use App\Models\Donor;
use App\Models\User;
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
        $user = User::factory(1)->create();

        Donor::factory(5)->create();
    }
}
