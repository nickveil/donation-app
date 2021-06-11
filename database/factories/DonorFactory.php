<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Donor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Donor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cat_id = [1,2,3];
        $cat_id = array_rand(array_flip($cat_id));
        switch($cat_id){
            case 1:
                $name = $this->faker->company();
                $pcName = $this->faker->name();
                $email = $this->faker->unique()->companyEmail();
                break;
                default;
            case 2:
            case 3:
                $name = $this->faker->name();
                $pcName = $name;
                $email = $this->faker->unique()->safeEmail();
                break;
        }
        return [
            'name' => $name,
            'category_id' => $cat_id,
            'primary_contact_name' => $pcName,
            'pc_phone_number' => $this->faker->phoneNumber(),
            'pc_email' => $email,
        ];
    }
}
