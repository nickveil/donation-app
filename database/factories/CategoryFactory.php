<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Validation\Rules\Unique;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $cat = $this->faker->unique()->word();
        // $cats = [
        //     ['name'=>'Corporate', 'slug'=>'corporate'],
        //     ['name'=>'Family', 'slug'=>'family'],
        //     ['name'=>'Friend of Program', 'slug'=>'friend-of-program']];

        
        return [
            //
        ];
    }
}
