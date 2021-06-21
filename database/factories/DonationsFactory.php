<?php

namespace Database\Factories;

use App\Models\Donations;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonationsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Donations::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $campaign = [1,2,3,4,5,6];
        $don_id = range(1,50,1);
        $campaign = array_rand(array_flip($campaign));
        $don_id = array_rand(array_flip($don_id));

        return [
            'campaigns_id' => $campaign,
            'donors_id' => $don_id,
            'donation_amount' => $this->faker->randomFloat(0 ,500, 10000),
            'donation_date' => now()
        ];
    }
}