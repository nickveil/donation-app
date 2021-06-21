<?php

namespace Database\Seeders;

use App\Models\Campaign;
use App\Models\Category;
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
        User::truncate();
        Category::truncate();
        Donor::truncate();

        $user = User::factory(1)->create();
        $cats = [
                ['name'=>'Corporate', 'slug'=>'corporate'],
                ['name'=>'Family', 'slug'=>'family'],
                ['name'=>'Friend of Program', 'slug'=>'friend-of-program']];
        foreach($cats as $cat){
            Category::factory()->create($cat);
        }

        // $category = Category::factory(1)->create([
        //     'name'=>'Corporate', 'slug'=>'corporate',
        //     'name'=>'Family', 'slug'=>'family',
        //     'name'=>'Friend of Program', 'slug'=>'friend-of-program'
        // ]);

        Donor::factory(50)->create();
        Campaign::factory(6)->create();
    }
}
