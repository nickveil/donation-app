<?php

namespace Database\Factories;

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
        return [
            'name' => $this->faker->company(),
            'primary_contact_name' => $this->faker->name(),
            'pc_phone_number' => $this->faker->phoneNumber(),
            'pc_email' => $this->faker->unique()->companyEmail(),
        ];
    }
}
